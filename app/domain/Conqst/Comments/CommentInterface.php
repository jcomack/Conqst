<?php namespace Conqst\Comments;

interface CommentInterface {

    public function getById($id);

    public function getByAuthorId($id);

    public function getAll();

    public function save($data, $id);

    public function delete($id);

}
