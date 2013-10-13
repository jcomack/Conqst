<?php namespace Conqst\repos\Tag;

class EloquentTag implements TagInterface {
     /**
     * Get paginated tags
     * 
     * @param int Current page
     * @param int Tags per page
     * @return object Object with $items and $totalItems for pagination
     */
     public function byPage($page = 1, $limit = 10) {
        
     }

     /**
      * Get article by URL
      * 
      * @param string URL slug of article
      * @return object Object of article information
      */
     public function bySlug($slug) {
        
     }

     /**
      * Get tags by article
      * 
      * @param string URL slug of article
      * @param int Current page
      * @param int Number of articles per page
      * @return object Object with $items and $totalItems for pagination
      */
     public function byArticle($article, $page = 1, $limit = 10) {
        
     }

    /**
     * Find existing tags or create them if needed
     * 
     * @param string $tags Array of tags
     * @return array Array or Arrayable collection of Tag objects
     */
    public function findOrCreate(array $tags) {
        
    }
}