<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog post</title>
    <link rel="stylesheet" href="{{ asset('front/asset/main.css') }}">
    
</head>
<body>
    <header class="kepala">
        <ul>
            <li><a href="">ABOUT</a></li>
            <li><a href="">REFRENCE</a></li>
            <li><a href="">CONTACT</a></li>
            <li><a href="">GET STARTED</a></li>
        </ul>
    </header>

    <main class="utama">
        <h1>Welcome to Our Little Corner of the <p></p> Internet</h1>
        
        <svg width="728" height="1" viewBox="0 0 728 1" fill="none" xmlns="http://www.w3.org/2000/svg">
        <line y1="0.5" x2="728" y2="0.5" stroke="white"/>
        </svg>

        <span>Grab a cup of coffee and enjoy posts crafted to inspire, inform, and entertain.</span>
    </main>

    <section class="bagian postingan">
        <div class="title-postingan">
            <span>Postingan Terbaru uhuy</span>
        </div>
        <svg width="460" height="1" viewBox="0 0 460 1" fill="none" xmlns="http://www.w3.org/2000/svg">
            <line y1="0.5" x2="460" y2="0.5" stroke="black"/>
        </svg>
        <div class="postingan-utama">
            <div class="wadah-box1">
                @php

                use App\Models\Post;

                $postingan = Post::all();

                @endphp

                @foreach($postingan as $posting)
                    <h4>

                        {{ $posting->title }} 
                        {{ $posting->author }} 
                        {{ $posting->content }} 
                    </h4>
                    
                @endforeach

            </div>
        </div>
    </section>

    <footer class="bagian kaki"></footer>

    <a href="{route (posts.startup)}">kembali</a>
</body>
</html>