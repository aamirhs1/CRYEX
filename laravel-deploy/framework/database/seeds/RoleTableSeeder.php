<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('roles')->insert([
          'name' => 'SuperAdmin',
          'guard_name'          => 'web',
      ]);
      DB::table('roles')->insert([
          'name' => 'Admin',
          'guard_name'          => 'web',
      ]);
      DB::table('roles')->insert([
          'name' => 'User',
          'guard_name'          => 'web',
      ]);      

    }
}
