<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        Role::create(['role' => 'admin']);
        Role::create(['role' => 'actor']);
        Role::create(['role' => 'user']);
        Role::create(['role' => 'director']);

    }
}
