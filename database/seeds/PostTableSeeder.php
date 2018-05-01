<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
            'title' => str_random(10),
            'slug' => str_random(10),
            'cover' => str_random(10),
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in ',
            'category' => str_random(10),
            'author' => str_random(10),
            'post_type' => str_random(10),
            ],
            [
            'title' => str_random(10),
            'slug' => str_random(10),
            'cover' => str_random(10),
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in ',
            'category' => str_random(10),
              'author' => str_random(10),
            'post_type' => str_random(10),
            ],
            [
            'title' => str_random(10),
            'slug' => str_random(10),
            'cover' => str_random(10),
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in ',
            'category' => str_random(10),
              'author' => str_random(10),
            'post_type' => str_random(10),
            ],
            [
            'title' => str_random(10),
            'slug' => str_random(10),
            'cover' => str_random(10),
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in ',
            'category' => str_random(10),
              'author' => str_random(10),
            'post_type' => str_random(10),
            ],
            [
            'title' => str_random(10),
            'slug' => str_random(10),
            'cover' => str_random(10),
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in ',
            'category' => str_random(10),
              'author' => str_random(10),
            'post_type' => str_random(10),
            ],
            [
            'title' => str_random(10),
            'slug' => str_random(10),
            'cover' => str_random(10),
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in ',
            'category' => str_random(10),
              'author' => str_random(10),
            'post_type' => str_random(10),
            ],

        ]);
    }
}
