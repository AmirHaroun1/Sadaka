<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Donation extends Pivot
{
    //
    public $incrementing = true;
    protected $table = 'campaign_user';
    protected $guarded = [];

}
