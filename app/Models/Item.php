<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $guarded = [];

    public function category()
    {
    	return $this->belongsTo('App\Models\Category');
    }

    public function extras()
    {
        return $this->belongsToMany('App\Models\Extra');
    }
}
