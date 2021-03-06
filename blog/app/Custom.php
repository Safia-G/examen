<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Custom extends Model
{
    public $timestamps = false;

    public function products()
    {
      return $this->belongsToMany('App\Product');
    }
}
