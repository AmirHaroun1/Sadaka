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
        $users = \App\User::all();
        $projects = \App\Project::all();
        foreach($users as $user)
        {
            foreach ($projects as $project)
            {
                factory(App\Campaign::class,1)->create([
                    'creator_id'=>$user->id,
                    'project_id'=>$project->id,
                    ]);

            }
        }

    }
}
