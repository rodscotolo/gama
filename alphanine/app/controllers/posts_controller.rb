class PostsController < ApplicationController
  before_action :find_post, only: [:edit, :update, :show, :delete]

  def index
    @posts = Post.all
  end

  def new
    @post = Post.new
  end

  def create
    @post = Post.new
    if @post.save(post_params)
      flash[:notice] = "Post criado com sucesso!"
      redirect_to post_path(@post)
    else
      flash[:alert] = "Erro na criaçao do post!"
      render :new
    end
  end

  def edit
  end

  def update
    if @post.update_attributtes(post_params)
      flash[:notice] = "Post atualizado com sucesso!"
      redirect_to post_path(@posts)
    else
      flash[:alert] = "Erro na atualização do post!"
      render :edit
    end
  end

  def show
  end

  def destroy
    if @post.destroy
      flash[:notice] =  "Post excluído com sucesso!"
      redirect_to post_path
    else
      flash[:alert] = "Erro na exclusão do post!"
    end
  end

  private

  def post_params
    params.require(:post).permit(:title, :body)
  end

  def find_post
    @post = Post.find(params[:id])
  end
end
