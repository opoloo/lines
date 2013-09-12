# {Authorable} associates one or more {Author}s to one or more {Article}s.
class Authorable < ActiveRecord::Base
  belongs_to :author
  belongs_to :article, touch: true
end
