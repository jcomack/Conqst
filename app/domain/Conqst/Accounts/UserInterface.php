<?php namespace Conqst\Accounts;

interface UserInterface {

    public function getById($id);

    public function getByName($name);

    public function getByBirthdate($date);

    public function getAmount($amount);

    public function getByGeoLocation($lang, $lat);

    public function save($user, $id = null);

    public function delete($id);

}
