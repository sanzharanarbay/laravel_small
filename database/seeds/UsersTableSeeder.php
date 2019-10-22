<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        DB::table('role_user')->truncate();

        $managerRole = Role::where('name', 'manager')->first();
        $clientRole = Role::where('name', 'client')->first();

        $manager = User::create([
           'name'=>'Manager Manager',
           'email'=>'manager@gmail.com',
           'password'=> Hash::make('manager1')
        ]);

        $client = User::create([
            'name'=>'Client Client',
            'email'=>'client@gmail.com',
            'password'=> Hash::make('client12')
        ]);

        $manager->roles()->attach($managerRole);
        $client->roles()->attach($clientRole);
    }
}
