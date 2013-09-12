class CreateAuthorables < ActiveRecord::Migration
  def change
    create_table :authorables do |t|
      t.references :author
      t.references :article

      t.timestamps
    end
    add_index :authorables, :author_id
    add_index :authorables, :article_id
  end
end
