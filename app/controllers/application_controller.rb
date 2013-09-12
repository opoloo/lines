# Standard ApplicationConroller. Provides +current_user+ and
# +authorize+ methods for all inherited controllers. 
class ApplicationController < ActionController::Base
  protect_from_forgery

private

  # sets the current_user if one exists in session
  def current_user
    @current_user ||= User.find(session[:user_id]) if session[:user_id]
  end
  helper_method :current_user

  # checks if current user is authorized. Redirects to login_url if not
  def authorize
    redirect_to login_url, alert: "Not authorized" if current_user.nil?
  end

end
