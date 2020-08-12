<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = \App\User::paginate(15);
        $campaigns = \App\Campaign::all();
        foreach($users as $user)
        {
            foreach ($campaigns as $campaign)
            {
                factory(App\Donation::class,1)->create([
                    'user_id'=>$user->id,
                    'campaign_id'=>$campaign->id,
                    'amount' => random_int(100,200),
                    ]);

            }
        }

    }
}
