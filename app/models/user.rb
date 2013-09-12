# {User}s are the administrators of a blog. 
# Since there is no interface to manage users, they have to be modified via
# Rails console. 
# 
# Examples:
#   rails c
#   # Create a new user:
#   User.create(email: 'mail@example.com', password: 'ultrasekret')
#   # Find a specific user and modify:
#   u = User.find_by_email('mail@example.com')
#   u.email = 'new@example.com'
#   u.password = 'newsecret'
#   u.save
class User < ActiveRecord::Base
  # use bcrypt-ruby to encrypt passwords
  has_secure_password

  # Attribute access control
  attr_accessible :email, :password

  # Validations
  validates :password, length: { minimum: 6 }, if: :validate_password?
  validates :email, uniqueness: true, presence: true

  
  private 
    # Returns +true+ if a password is submitted
    def validate_password?
      password.present?
    end

end
