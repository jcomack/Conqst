<?php namespace Conqst\repos\User;

interface UserInterface {
    
    public function byId($id);

    public function byUsername($username);

    public function byEmail($email);

    public function byPage( $page = 1, $limit = 10);


}