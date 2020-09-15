<?php

namespace App\Http\Controllers;

use App\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonationController extends Controller
{
    //
    public function store(Request $request)
    {
        return Donation::create([
            'campaign_id' => $request['campaignID'],
            'user_id' => $request['auth_id'],
            'amount' => $request['DonationAmount'],
            'comment' => $request['DonationWord'],
        ]);

    }
}
