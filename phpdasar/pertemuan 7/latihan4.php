<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>post</title>
</head>
<body>

<form action="login.php" method="post">
	Masukkan nama :
	<input type="text" name="nama">
	<br>
	<button type="submit" name="submit">Kirim!</button>
    
</form>

</body>
</html>

<!-- <form action="login.php" method="post">  ini maksud nya halaman login ini ketika login nya sudah diisi maka data nya akan dikirim kemana dengan metode post-->


<!-- <input type="text" name="nama">
ini 2 atribut ini penting agar metode pst ini berjalan `text` dan `nama` -->

<!-- ============================================================================================== -->
<!-- ini ketika <form action="" nya kosong maka dia akan mengirim data nya ke diri sendiri ketika bagian ini
<?php if (isset ($_POST["submit"])): ?>
		<h1>selamat datang, <?= $_POST["nama"] ?></h1>
		
	<?php endif ?>
di hapus ketika pertama kali entr maka tampilan akan selamat datang, bagian nama nya eror karna belum di pencet bagian submit  nya
-->

<!-- <!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>post</title>
</head>
<body>

	<?php if (isset ($_POST["submit"])): ?>
		<h1>selamat datang, <?= $_POST["nama"] ?></h1>
		
	<?php endif ?>

<form action="" method="post">
	Masukkan nama :
	<input type="text" name="nama">
	<br>
	<button type="submit" name="submit">Kirim!</button>
    
</form>

</body>
</html> -->