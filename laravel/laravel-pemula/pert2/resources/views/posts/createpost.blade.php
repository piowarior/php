<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
</head>
<body>

<h1>Tambah Post Baru</h1>

<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label>Judul</label><br>
    <input type="text" name="title"><br><br>

    <label>Gambar</label><br>
    <input type="file" name="picture"><br><br>

    <label>Penulis</label><br>
    <input type="text" name="author"><br><br>

    <label>Konten</label><br>
    <textarea name="content"></textarea><br><br>

    <button type="submit">Simpan</button>
</form>

</body>
</html>
