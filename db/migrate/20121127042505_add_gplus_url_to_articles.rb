class AddGplusUrlToArticles < ActiveRecord::Migration
  def change
    add_column :articles, :gplus_url, :string
  end
end
