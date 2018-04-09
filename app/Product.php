<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function items() {
        return $this->hasMany('App\Item');
    }
}
