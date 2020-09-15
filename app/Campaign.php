<?php

namespace App;

use Alkoumi\LaravelHijriDate\Hijri;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Campaign extends Model
{
    //
    protected $guarded = [];
    public function getImageAttribute()
    {
        if(file_exists(public_path().'/storage/'.$this->attributes['image']))
        {
            return asset('/storage/'.$this->attributes['image']);
        }
        else{
            return asset($this->attributes['image']);
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
        return $this->belongsToMany('App\User')
                        ->using('App\Donation')
                        ->withPivot([
                            'amount',
                            'comment',
                            'created_at',
                            'updated_at',
                        ])
                        ->orderBy('pivot_created_at','desc');
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
