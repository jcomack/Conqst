<?php

use Conqst\repos\Article\ArticleInterface;

class ContentController extends BaseController {
    protected $article;

    public function __construct(ArticleInterface $article) {
        $this->article = $article;
    }

    public function home() {
        $page = Input::get('page', 1);
        $perPage = 10;

        $pagData = $this->article->byPage($page, $perPage);

        $articles = Paginator::make($pagData->items, $pagData->totalItems, $perPage);

        return View::make('home')->with('articles', $articles);
    }

}