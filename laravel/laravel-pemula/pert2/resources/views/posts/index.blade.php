
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog post</title>
    <link rel="stylesheet" href="asset/main.css">
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

    <section>

     <h1>Daftar Postingan</h1>

    @if ($posts->count() > 0)
        <ul>
            @foreach ($posts as $post)
                <li>
                    <h3>{{ $post->title }}</h3>
                    <p><strong>Author:</strong> {{ $post->author }}</p>
                    <p>{{ $post->content }}</p>
                    <hr>
                </li>
            @endforeach
        </ul>
    @else
        <p>Tidak ada postingan.</p>
    @endif

    </section>

    <a href="post.html">kembali</a>
</body>
</html>