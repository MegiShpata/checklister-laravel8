<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create();

        foreach (Teams::all() as $team){
            $users = \App\User::inRandomOrder()->take(rand(1,3))->pluck('id');
            $team->users()->attach($users);
        }
    }
}
