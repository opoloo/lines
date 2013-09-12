class CreateArticles < ActiveRecord::Migration
  def change
    create_table :articles do |t|
      t.string :title
      t.string :sub_title
      t.text :content
      t.boolean :published
      t.datetime :published_at
      t.string :hero_image

      t.timestamps
    end
  end
end
