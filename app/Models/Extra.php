<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
    protected $guarded = [];

    public function items()
    {
        return $this->belongsToMany('App\Models\Item');
    }
}
