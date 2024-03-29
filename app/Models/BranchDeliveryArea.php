<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BranchDeliveryArea extends Model
{
    protected $guarded = [];

    public function branch()
    {
    	return $this->belongsTo('App\Models\Branch');
    }
}
