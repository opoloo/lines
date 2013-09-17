# encoding: utf-8
namespace :lines do
  
  desc "Setting up database and default entries."
  task :setup => :environment do

  begin
    # run bundle install
    puts "\nRunning 'bundle install'...\n"
    if !system("bundle install")
      raise "The 'bundle install command failed!\n\n'"
    end

    # Run migrations
    Rake::Task["db:migrate"].invoke
    puts "Database created and migrations run.\n\n"
        
    # Get user's credentials
    puts "\n\nLets create a user for administration. This step is required to be able to login.\n\n"
    get_credentials
    
    # Validate and create user/author
    u = User.new(email: @emailaddr, password: @pw)
    a = Author.new(email: @emailaddr, name: @author_name, description: "I am a Ruby on Rails developer who loves great-looking blog frameworks and cares about sharing beautiful code.")
    if u.valid? && a.valid? && u.save! && a.save!
      puts "\n\nUser created.\n\n"
    else
      puts "Something went wrong. lets do it again...\n"
      get_credentials
    end

    # Seed default db entries if no entries exist yet
    if Article.count == 0 || Author.count == 0
      puts "Importing example articles and author...\n"
      Rake::Task["db:seed"].invoke
      puts "Done."
    end


    # Final instructions
    puts "\n\nCongrats! Your Lines blog is now ready to use. Just start the server:"
    puts "\n  rails server\n"
    puts  "...and head to #{CONFIG[:host]}/login to get started.\n\n"

  rescue SystemExit, Interrupt
    puts "\n\nBye Bye."
  rescue Exception => e
    raise
  end

  end

  
  # Reads credentials(email and password) from STDIN
  def get_credentials
    print "Your name: "
    @author_name = STDIN.gets.strip.to_s
    print "Your Emailaddress: "
    @emailaddr = STDIN.gets.strip.to_s
    print "Choose a password: "
    @pw = STDIN.gets.strip.to_s
    get_credentials if commit_credentials == false
  end

  def commit_credentials
    print "\n\nAre the above values correct? (y/n) "
    if STDIN.gets.strip.to_s == "n"
      return false
    end
    true
  end

end
