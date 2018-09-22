<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        // Add the master administrator, user id of 1

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
