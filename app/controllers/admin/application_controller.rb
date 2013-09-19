# Parent controller for the whole admin area. All controllers for the +Admin+ namespace
# inherit from <tt>Admin::ApplicationController</tt>
# 
# The +authorize+ before filter ensures that all inherited controllers and actions 
# require a logged in user.
class Admin::ApplicationController < ApplicationController
  protect_from_forgery

  before_action :authorize

  layout 'admin'

end
