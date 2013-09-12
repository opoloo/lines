class AddGplusProfileToAuthors < ActiveRecord::Migration
  def change
    add_column :authors, :gplus_profile, :string
  end
end
