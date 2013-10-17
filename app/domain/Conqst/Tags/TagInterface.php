<?php namespace Conqst\Tags;

interface TagInterface {

    public function getById($id);

    public function getAllByTag($role);

    public function getAll();

    public function save($data, $id = null);

    public function delete($id);

}
