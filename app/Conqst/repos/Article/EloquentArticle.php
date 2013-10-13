<?php namespace Conqst\repos\Article;

use Conqst\repos\Tag\TagInterface;
use Illuminate\Database\Eloquent\Model;

class EloquentArticle implements ArticleInterface {

    protected $article;
    protected $tag;

    public function __construct(Model $article, TagInterface $tag) {
        $this->article = $article;
        $this->tag = $tag;
    }

    /**
     * Get paginated articles
     * 
     * @param int Current page
     * @param int Number of articles per page
     * @return StdClass Object with $items and $totalItems for pagination
     */
    public function byPage($page = 1, $limit = 10) {
        $articles =     $this->article->with('tags')
                            ->where('status_id', 1)
                            ->orderBy('created_at', 'desc')
                            ->skip($limit * ($page - 1))
                            ->take($limit)
                            ->get();

        // Return object with pagination data
        $data = new \StdClass();
        $data->items = $articles->all();
        $data->totalItems = $this->totalArticles();

        return $data;
    }

    /**
     * Get single article by URL
     * 
     * @param string URL slug of article
     * @return object Object or article information
     */
    public function bySlug($slug) {
        return $this->article->with('tags')->where('status_id', 1)->where('slug', $slug)->first();
    }

    /**
     * Get articles by tag
     * 
     * @param string URL slug of tag
     * @param int Current page
     * @param int Number of articles per page
     * @return StdClass Object with $items and $totalItems for pagination
     */
    public function byTag($tag, $page = 1, $limit = 10) {
        // $foundTag = $this->tag->where('slug', $tag)->first();
        $foundTag = $this->tag->bySlug($tag);

        if(!$foundTag) {
            // Return empty StdClass
            $data = new \StdClass();
            $data->items = array();
            $data->totalItems = 0;

            return $data;
        }

        $articles = $this->tag->articles()
                            ->where('articles.status_id', 1)
                            ->orderBy('articles.created_at', 'desc')
                            ->skip($limit * ($page-1))
                            ->take($limit)
                            ->get();

        $data = new \StdClass();
        $data->items = $articles->all();
        $data->totalItems = $this->totalByTag();

        return $data;

    }

    /**
     * Get total article count
     * 
     * @return int Total articles
     */
    protected function totalArticles() {
        return $this->article->where('status_id', 1)->count();
    }

    /**
     * Get total article count per tag
     * 
     * @param string $tag Tag slug
     * @return int Total articles per tag
     */
    protected function totalByTag($tag) {
        return $this->tag->bySlug($tag)->articles()->where('status_id', 1)->count();
    }


}