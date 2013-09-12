class ChangeDescriptionToAuthors < ActiveRecord::Migration
  def change
    rename_column :authors, :desciption, :description
  end
end
