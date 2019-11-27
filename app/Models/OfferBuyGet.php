<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OfferBuyGet extends Model
{
    protected $guarded = [];

    protected $table = 'offers_buy_get';

    public function offer()
    {
    	return $this->belongsTo('App\Models\Offer');
    }
}
