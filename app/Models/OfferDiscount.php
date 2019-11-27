<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OfferDiscount extends Model
{
    protected $guarded = [];

    protected $table = 'offers_discount';

    public function offer()
    {
    	return $this->belongsTo('App\Models\Offer');
    }
}
