<?php
class Tag extends Eloquent {
    
    protected $table = 'tags';

    protected $fillable = array(
        'tag', 
        'slug'
    );

    public $timestamps = false;

    public function articles() {
        return $this->belongsToMany('Article');
    }
}