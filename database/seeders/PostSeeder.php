<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = new \App\Models\Post();
        $post->title = "First Post Title";
        $post->save();

        $post = new \App\Models\Post();
        $post->title = "Second Post Title";
        $post->save();

        $post = new \App\Models\Post();
        $post->title = "Third Post Title";
        $post->save();
    }
}
