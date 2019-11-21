<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $guarded = [];

    public function deliveryAreas()
    {
    	return $this->hasMany('App\Models\BranchDeliveryArea');
    }

    public function workingDays()
    {
        return $this->belongsToMany('App\Models\WorkingDay');
    }
}
