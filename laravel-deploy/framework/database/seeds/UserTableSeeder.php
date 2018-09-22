<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add the master administrator, user id of 1
      User::create([
          'name'         => 'SuperAdmin',
          'email'             => 'super@admin.com',
          'password'          => bcrypt('123456'),
      ]);

      User::create([
          'name'         => 'Admin',
          'email'             => 'admin@admin.com',
          'password'          => bcrypt('123456'),
      ]);

    }
}
