<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $guarded = [];

    public function buyGet()
    {
    	return $this->hasOne('App\Models\OfferBuyGet');
    }

    public function discount()
    {
    	return $this->hasOne('App\Models\OfferDiscount');
    }
}
