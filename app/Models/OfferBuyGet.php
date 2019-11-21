<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OfferBuyGet extends Model
{
    protected $guarded = [];

    public function offer()
    {
    	return $this->belongsTo('App\Models\Offer');
    }
}
