<?php 
if (isset($_POST["submit"])) {
    // Ambil nama dan sandi dari input dan simpan ke variabel
    $nama = $_POST["nama"];
    $sandi = $_POST["Sandi"];

    // Baca isi file credentials.txt dan simpan dalam array
    $credentials = file("credentials.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $isValid = false;

    foreach ($credentials as $line) {
        list($storedNama, $storedSandi) = explode(",", $line);
        if ($nama === $storedNama && $sandi === $storedSandi) {
            $isValid = true;
            break;
        }
    }

    if ($isValid) {
        // Jika sesuai, arahkan ke halaman home.php
        header("Location: home.php");
        exit;
    } else {
        // Jika tidak sesuai, tampilkan pesan kesalahan
        echo "Nama atau sandi salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
</head>
<body>

<form action="" method="post">
    Masukkan nama :
    <input type="text" name="nama" required>
    <br>
    Masukkan Sandi :
    <input type="password" name="Sandi" required>
    <br>
    <button type="submit" name="submit">Kirim!</button>
</form>
<a href="registrasi.php">registrasi</a>

</body>
</html>
