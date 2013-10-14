<?php namespace Conqst\Base;

use Eloquent, Validator;

abstract class EloquentBase extends Eloquent {
    protected $rules = [];
    protected $validator;

    public function isValid(){}

    public function getErrors(){}

    public function clearCache(){}
}
