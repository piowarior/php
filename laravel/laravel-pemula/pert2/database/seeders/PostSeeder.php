<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        Post::create([
            'title' => 'Postingan Pertama',
            'author' => 'Rohisul Iman',
            'content' => 'Ini adalah isi dari postingan pertama.'
        ]);

        Post::create([
            'title' => 'Postingan Kedua',
            'author' => 'Admin',
            'content' => 'Isi dari postingan kedua untuk pengujian.'
        ]);
    }
}
