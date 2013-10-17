<?php namespace Conqst\Attractions;

interface AttractionInterface {

    public function getById($id);

    public function getByName($name);

    public function getByCategory($category);

    public function getByLocation($location);

    public function getAll();

    public function save($data, $id = null);

    public function delete($id);

}
