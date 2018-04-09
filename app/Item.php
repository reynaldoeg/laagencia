<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';

    public function orders() {
        return $this->belongsToMany('App\Order')->withTimestamps();
    }

    public function product() {
        return $this->belongsTo('App\Product');
    }
}
