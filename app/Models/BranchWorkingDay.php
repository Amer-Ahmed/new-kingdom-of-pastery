<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BranchWorkingDay extends Model
{
    protected $guarded = [];

    public function branch()
    {
        return $this->belongsTo('App\Models\Branch');
    }
}
