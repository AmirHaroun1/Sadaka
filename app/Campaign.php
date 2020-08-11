<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    //
    protected $guarded = [];

    public function project()
    {
        return $this->belongsTo('Project');
    }

    public function donations()
    {
        return $this->belongsToMany('App\User')->using('App\Donation');
    }
}
