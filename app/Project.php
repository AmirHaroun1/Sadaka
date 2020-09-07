<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $guarded = [];
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function campaigns()
    {
        return $this->hasMany('App\Campaign');
    }
    public function getImageAttribute()
    {
        return asset($this->attributes['image']);
    }
    public function scopeTotalStats($query)
    {
        $query->addSelect(['TotalDonations' => function ($query) {
            $query->selectRaw('sum(amount)')
                ->from('campaign_user');
        },'TotalCampaigns'=>function($query){
            $query->selectRaw('count(id)')
                ->from('campaigns');
        },'TotalDonors'=>function($query){
            $query->selectRaw('count(id)')
                ->from('campaigns');
        }]);
    }
}
