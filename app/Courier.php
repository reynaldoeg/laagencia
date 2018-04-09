<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
    protected $table = 'couriers';

    public function orders() {
        return $this->hasMany('App\Order');
    }
}
