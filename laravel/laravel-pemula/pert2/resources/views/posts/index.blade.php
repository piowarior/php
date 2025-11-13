<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Postingan</title>
</head>
<body>
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

</body>
</html>
