<?php namespace Conqst\Conferences;

interface ConferenceInterface {

    public function getById($id);

    public function getByName($name);

    public function getByStartDate($date);

    public function getAttendees();

    public function getByGeoLocation($lang, $lat);

    public function getAll();

    public function save($data, $id = null);

    public function delete($id);

}
