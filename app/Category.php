<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function SpObjects ()
    {
        return $this->hasMany('App\SpObject','category_id', 'id');
    }
}
