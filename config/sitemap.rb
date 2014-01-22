# Set the host name for URL creation
SitemapGenerator::Sitemap.default_host = "http://#{CONFIG[:host]}"

SitemapGenerator::Sitemap.create do
  Article.published.find_each do |article|
    add article_path(article), :lastmod => article.updated_at
  end
end
