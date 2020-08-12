<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    //
    protected $guarded = [];

    public function getImage()
    {
        if(file_exists(public_path().'/storage'.$this->image))
        {

            return asset('storage/'.$this->image);
        }
        else{
            return asset($this->image);
        }
    }
    public function project()
    {
        return $this->belongsTo('App\Project');
    }
    public function user()
    {
        return $this->belongsTo('App\User','creator_id');
    }
    public function donations()
    {
        return $this->belongsToMany('App\User')->using('App\Donation');
    }

    public function scopeWithCollectedAmount($query)
    {
         $query->addSelect(['CollectedAmount' => function ($query) {
            $query->selectRaw('sum(amount)')
                ->from('donations')
                ->whereColumn('campaign_id', 'campaigns.id');
        }]);
    }
}
