class ChangedPublishedForArticles < ActiveRecord::Migration
  def up
  	change_column :articles, :published, :boolean, :default => false
  end
  def down
  	change_column :articles, :published, :boolean, :default => :null
  end
end
