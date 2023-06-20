<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Post One',
                'excerpt' => 'This is the summary of post one',
                'body' => 'post one from the database',
                'min_to_read' => 2,
                'image_path' => 'Empty',
                'is_published' => false,
            ],
            [
                'title' => 'Post Two',
                'excerpt' => 'This is the summary of post two',
                'body' => 'post two from the database',
                'min_to_read' => 2,
                'image_path' => 'Empty',
                'is_published' => false,
            ]
        ];

        foreach ($posts as $key => $value) {
            Post::create($value);
        }
    }
}
