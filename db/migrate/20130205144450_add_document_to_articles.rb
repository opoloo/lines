class AddDocumentToArticles < ActiveRecord::Migration
  def change
    add_column :articles, :document, :string
  end
end
