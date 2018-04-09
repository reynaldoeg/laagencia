<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $table = 'orders';

	public function items() {
		return $this->belongsToMany('App\Item')->withTimestamps();
	}

    public function courier() {
        return $this->belongsTo('App\Courier');
    }

    protected $fillable = [
        'courier_id', 'name', 'address', 'total',
    ];
}
