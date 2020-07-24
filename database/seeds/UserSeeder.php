<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $adminRole = Role::where('role', 'admin')->first();
        $actorRole = Role::where('role', 'actor')->first();
        $userRole = Role::where('role', 'user')->first();

        $admin = User::create([
            'firstname' => 'Admin',
            'lastname'=> 'Admin',
            'role'=>'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin')
        ]);

        $actor = User::create([
            'firstname' => 'Actor',
            'lastname'=> 'Actor',
            'role'=>'actor',
            'email' => 'actor@gmail.com',
            'password' => bcrypt('actor')
        ]);

        $user = User::create([
            'firstname' => 'User',
            'lastname'=> 'User',
            'role'=>'user',
            'email' => 'user1@gmail.com',
            'password' => bcrypt('user1')
        ]);
    $admin->roles()->attach($adminRole);
    $actor->roles()->attach($actorRole);
    $user->roles()->attach($userRole);
    }


}
