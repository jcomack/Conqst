<?php namespace Conqst\Reviews;

interface ReviewInterface {

    public function getById($id);

    public function getByAuthor($id);

    public function getByDate($date);

    public function getAll();

    public function save($data, $id = null);

    public function delete($id);

}
