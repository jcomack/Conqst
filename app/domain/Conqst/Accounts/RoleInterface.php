<?php namespace Conqst\Accounts;

interface RoleInterface {

    public function getById($id);

    public function getByRole($role);

    public function save($data, $id = null);

    public function delete($id);

}
