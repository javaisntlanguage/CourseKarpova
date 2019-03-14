<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = array('category_name');
    public $timestamps = false;
    public function SpObjects ()
    {
        return $this->hasMany('App\SpObject','category_id', 'id');
    }
}
