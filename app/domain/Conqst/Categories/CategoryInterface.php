<?php namespace Conqst\Categories;

interface CategoryInterface {

    public function getById($id);

    public function getByName($name);

    public function getAll();

    public function save($data, $id = null);

    public function delete($id);

}
