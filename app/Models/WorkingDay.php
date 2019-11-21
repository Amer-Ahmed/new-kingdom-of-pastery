<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkingDay extends Model
{
    protected $guarded = [];

    public function branches()
    {
        return $this->belongsToMany('App\Models\Branch');
    }
}
