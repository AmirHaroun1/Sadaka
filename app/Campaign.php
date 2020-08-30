<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Campaign extends Model
{
    //
    protected $guarded = [];
    protected $appends =['photo'];
    public function getPhotoAttribute()
    {
        if(file_exists(public_path().'/storage/'.$this->image))
        {
            return asset('/storage/'.$this->image);
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
                ->from('campaign_user')
                ->whereColumn('campaign_id', 'campaigns.id');
        }]);
    }

}
