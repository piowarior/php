<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        Post::create([
            'title' => '5 Tips Merawat Mobil Agar Tetap Prima',
            'picture' => 'front/asset/gambar/gambar-postingan1.png',
            'author' => 'Rohisul Iman',
            'content' => 'Pelajari langkah sederhana menjaga performa mobil tetap stabil setiap hari, mulai dari perawatan mesin hingga kebersihan interior…'
        ]);

        Post::create([
            'title' => 'Pink Beauty Hacks You’ll Love This Week',
            'picture' => 'front/asset/gambar/gambar-pink-beuty.png',
            'author' => ' Daniel Carter',
            'content' => 'Pelajari langkah sederhana menjaga performa mobil tetap stabil setiap hari, mulai dari perawatan mesin hingga kebersihan interior…'
        ]);

        Post::create([
            'title' => 'Minimalist Living: How to Start Fres',
            'picture' => 'front/asset/gambar/gambar-sepatu-hitam.png',
            'author' => ' Daniel Carter',
            'content' => 'Pelajari langkah sederhana menjaga performa mobil tetap stabil setiap hari, mulai dari perawatan mesin hingga kebersihan interior…'
        ]);

        Post::create([
            'title' => '5 Tips Merawat Mobil Agar Tetap Prima',
            'picture' => 'front/asset/gambar/gambar-hidup-sehat.png',
            'author' => ' Daniel Carter',
            'content' => 'Pelajari langkah sederhana menjaga performa mobil tetap stabil setiap hari, mulai dari perawatan mesin hingga kebersihan interior…'
        ]);
    }
}
