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
            'name'=>"user1",
            'email'=>"user1@user.com",
            'password'=>bcrypt("123qwe")
        ]);
    }
}
