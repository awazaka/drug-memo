<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'user1',
            'password' => bcrypt('password')
        ]);

        DB::table('users')->insert([
            'name' => 'user2',
            'password' => bcrypt('password')
        ]);
    }
}
