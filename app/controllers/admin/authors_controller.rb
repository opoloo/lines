# Provides CRUD actions for +Author+ model.
class Admin::AuthorsController < Admin::ApplicationController

  def index
    @authors = Author.all
  end

  def show
    @author = Author.find(params[:id])
  end

  def new
    @author = Author.new
  end

  def edit
    @author = Author.find(params[:id])
  end

  def create
    @author = Author.new(params[:author])

    if @author.save
      redirect_to admin_author_path @author, notice: 'Author was successfully created.'
    else
      render action: "new"
    end
  end

  def update
    @author = Author.find(params[:id])

    if @author.update_attributes(params[:author])
      redirect_to admin_author_path @author, notice: 'Author was successfully updated.'
    else
      render action: "edit"
    end
  end

  def destroy
    @author = Author.find(params[:id])
    if @author.destroy
      redirect_to admin_authors_url
    else
      @authors = Author.all
      render "index" 
    end
  end
end
