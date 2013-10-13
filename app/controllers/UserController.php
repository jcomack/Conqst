<?php

use Conqst\Repositories\User\UserRepository as User;

class UserController extends BaseController {
    
    public function __construct(User $user) {
        $this->user = $user;
    }

    public function index() {
        return $this->user->all();
    }

}