<?php

namespace App;

use Alkoumi\LaravelHijriDate\Hijri;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;


    protected $guarded = [];

    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getImageAttribute()
    {
        if(file_exists(public_path().'/storage/'.$this->attributes['image']))
        {
            return asset('storage/'.$this->attributes['image']);
        }
        else{
            return asset($this->attributes['image']);
        }
    }

    public function getDonationDateAttribute()
    {
        return Hijri::Date('j - m - Y', $this->pivot->attributes['created_at']);
    }
    public function campaigns()
    {
        return $this->hasMany('App\Campaign','creator_id')->WithCollectedAmount()
            ;
    }

    public function donations()
    {
        return $this->belongsToMany('App\Campaign')->using('App\Donation')->withPivot('amount','created_at');
    }

}
