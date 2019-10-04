<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'content_upper' => str_random(3),
            'content_middle' => str_random(3),
            'content_bottom' => str_random(3),
            'author' => str_random(3),
            'date' => str_random(1),
            'category_id' => rand(1,5),
            'word_id' => rand(1,5),
        ]);
    }
}
