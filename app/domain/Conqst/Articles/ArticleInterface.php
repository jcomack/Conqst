<?php namespace Conqst\Articles;

interface ArticleInterface {

    public function getById($id);

    public function getByTitle($title, $fuzzySearch = false);

    public function getByAuthorId($id);

    public function getByTag($tag);

    public function getByViewCount();

    public function getAll();

    public function save($data, $id = null);

    public function delete($id);

}
