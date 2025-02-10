
<!-- mirip buat sistem keamanan sederhana -->
<!-- berguna untuk membuat sistem login -->
<?php 
// cek apakah tidak ada data di $_GET
if (
	!isset($_GET["nama"]) ||
	!isset($_GET["nim"]) ||
	!isset($_GET["email"]) ||
	!isset($_GET["jurusan"]) ||
	!isset($_GET["gambar"])
	//!isset($_GET["nama"]) maksud nya  ketika `!isset` tidak ada data yang di kirim lewat  $_GET maka ....

)
	//redirect
{
	header("location : latihan3.php");// ...user yang mencoba login akan eror atau kembali ke halaman latihan3.php
	exit;
}
// ini antisipasi ketika ada orang jahat mau masuk web kita dengan lewat url `localhost/phpdasar/pertemuan%207/latihan3.php` mereka mengganti url nya agar bisa memaksa masuk dan mendapatkan data dari $_GET codingan web kita 
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>detail mahasiswa</title>
</head>
<body>
	<ul>
		<li><img src="img /<?= $_GET["gambar"]; ?>"></li>
		<li><?= $_GET["nama"]; ?></li>
		<li><?= $_GET["nim"]; ?></li>
		<li><?= $_GET["email"]; ?></li>
		<li><?= $_GET["jurusan"]; ?></li>
		<a href="latihan3.php">kembali ke latihan 3</a>

	</ul>

</body>
</html>