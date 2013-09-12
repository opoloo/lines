class AddDescriptionToAuthors < ActiveRecord::Migration
  def change
    add_column :authors, :desciption, :text
  end
end
