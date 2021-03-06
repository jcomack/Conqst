<?php namespace Conqst\Accounts;

interface UserInterface {

    public function getById($id);

    public function getByName($name);

    public function getByBirthdate($date);

    public function getAmount($amount);

    public function getByGeoLocation($lang, $lat);

    public function getAll();

    public function save($data, $id = null);

    public function delete($id);

}
