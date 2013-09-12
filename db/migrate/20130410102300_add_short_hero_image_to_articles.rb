class AddShortHeroImageToArticles < ActiveRecord::Migration
  def change
    add_column :articles, :short_hero_image, :string
  end
end
