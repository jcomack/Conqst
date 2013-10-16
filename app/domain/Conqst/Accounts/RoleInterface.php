<?php namespace Conqst\Accounts;

interface RoleInterface {

    public function getById($id);

    public function getByRole($role);

    public function save($role, $id = null);

    public function delete($id);

}
