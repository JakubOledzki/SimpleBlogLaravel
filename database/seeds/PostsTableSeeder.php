<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title'=>"First Post",
            'description'=>"It's first post on this blog. Welcome !!!",
            'author'=>'user1'
        ]);
    }
}
