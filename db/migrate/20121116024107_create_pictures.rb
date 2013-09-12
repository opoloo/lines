class CreatePictures < ActiveRecord::Migration
  def change
    create_table :pictures do |t|
      t.string :image
      t.string :name
      t.references :article

      t.timestamps
    end
    add_index :pictures, :article_id
  end
end
