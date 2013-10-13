<?php namespace Conqst\repos;

use Article;
use Conqst\repos\Tag\EloquentTag;
use Conqst\repos\Article\EloquentArticle;
use Illuminate\Support\ServiceProvider;

class RepoServiceProvider extends ServiceProvider {
    /**
     * Register the binding
     * 
     * @return void
     */
    public function register() {
        $this->app->bind('Conqst\repos\Tag\TagInterface', function($app){
            return new EloquentTag(new Tag);
        });

        $this->app->bind('Conqst\repos\Article\ArticleInterface', function($app){
            return new EloquentArticle(new Article, $app->make('Conqst\repos\Tag\TagInterface'));
        });
    }
}