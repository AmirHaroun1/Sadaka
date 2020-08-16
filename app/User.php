<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;


    protected $guarded = [];
    protected $appends = ['photo'];

    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getPhotoAttribute()
    {
        if(file_exists(public_path().'/storage'.$this->image))
        {

            return asset('storage/'.$this->image);
        }
        else{
            return asset($this->image);
        }
    }
    public function campaigns()
    {
        return $this->hasMany('App\Campaign','creator_id');
    }

    public function donations()
    {
        return $this->belongsToMany('App\Campaign')->using('App\Donation');
    }

}
