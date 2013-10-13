<?php namespace Conqst\repos\Article;

interface ArticleInterface {
    /**
     * Get paginated articles
     * 
     * @param int Current page
     * @param int Articles per page
     * @return object Object with $items and $totalItems for pagination
     */
     public function byPage($page = 1, $limit = 10);

     /**
      * Get article by URL
      * 
      * @param string URL slug of article
      * @return object Object of article information
      */
     public function bySlug($slug);

     /**
      * Get articles by tag
      * 
      * @param string URL slug of tag
      * @param int Current page
      * @param int Number of articles per page
      * @return object Object with $items and $totalItems for pagination
      */
     public function byTag($tag, $page = 1, $limit = 10);

}