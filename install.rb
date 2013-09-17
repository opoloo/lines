# Display note what to do before starting the setup
puts "\nWhat to do before you continue:\n\n"
puts "  1. Rename or copy config/database.yml.dist to config/database.yml"
puts "  2. Adjust config/database.yml to your needs:"
puts "       username: DATABASE_USERNAME"
puts "       password: DATABASE_PASSWORD"
puts "     There'll be 3 blocks that contain username & password: development-, test- & production-database.\n\n"
puts "  3. Optional: Adjust config/lines_config.yml to your needs"
print "\nIf you're done with the above, press <ENTER> to continue or <CTRL+C> to abort. "
STDIN.gets

system("bundle exec rake db:create")
system("bundle exec rake lines:setup")