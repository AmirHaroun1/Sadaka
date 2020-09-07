<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Charity extends Model
{
    //


    public function projects()
    {
        return $this->hasMany('App\Project','charity','name');
    }
    public function campaigns()
    {
        return $this->hasManyThrough('App\Campaign','App\Project','charity','project_id','name');
    }
}
