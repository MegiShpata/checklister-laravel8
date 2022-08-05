<?php

namespace Database\Seeders;

use App\Models\Tenant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TenantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Tenant::class, 10)->create();

        foreach (Tenant::all() as $tenant){
            $users = \App\User::inRandomOrder()->take(rand(1,3))->pluck('id');
           // $tenant->users()->attach($users);
            //foreach ($users as $user) {
                //$tenant->users()->attach($user,['current_tenant_id' =>rand(1,8)]);
            //}
        }
    }
}
