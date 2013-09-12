require 'faker'

FactoryGirl.define do
  factory :user do |f|
    f.email { Faker::Internet.email }
    f.password "sekret"
    # f.password_confirmation "sekret"
  end

end