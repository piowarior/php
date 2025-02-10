<?php 
if (isset($_POST["submit"])) {
    // Ambil nama dan sandi dari input dan simpan ke variabel
    $nama = $_POST["nama"];
    $sandi = $_POST["sandi"];

    // Simpan nama dan sandi ke dalam file di folder yang sama
    $file = fopen("credentials.txt", "a");
    fwrite($file, $nama . "," . $sandi . PHP_EOL);
    fclose($file);

    // Tampilkan hasil input
    echo "Nama yang Anda masukkan: " . htmlspecialchars($nama);
    echo "<br>Sandi yang Anda masukkan: " . htmlspecialchars($sandi);

    // Tampilkan pesan bahwa data telah disimpan
    echo "<br>Data telah disimpan. Anda akan diarahkan ke halaman login.";

    // Arahkan ke login.php setelah 5 detik
    header("refresh:5;url=login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi</title>
</head>
<body>

<form action="" method="post">
    Masukkan nama :
    <input type="text" name="nama" required>
    <br>
    Masukkan Sandi :
    <input type="password" name="sandi" required>
    <br>
    <button type="submit" name="submit">Submit!</button>
</form>

</body>
</html>


