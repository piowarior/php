<?php 

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>halaman admin</title>
</head>

<body>

	<h1>daftar mahasiswa</h1>


<a href="tambah.php" style="background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;g
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 12px;
  border: 2px solid #4CAF50;">Tambah Data Mahasiswa</a>

	<table border="1" cellpadding="10" cellspacing="0">
		
		<tr>
			<th>no.</th>
			<th>aksi</th>
			<th>gambar</th>
			<th>nim</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>

		</tr>
		<?php $i=1; ?>
		<?php foreach ($mahasiswa as $row) : ?>

		<tr>
			<td><?= $i ?></td>

			<td>
				<a href="">ubah</a>
				<a href="hapus.php?id=<?=  $row ["id"]; ?>">hapus</a>

			</td>
			<td><img src="img/<?php echo $row ["gambar"] ?>" width="50"></td>
			<td><?php echo $row ["nim"] ?></td>
			<td><?php echo $row ["nama"] ?></td>
			<td><?php echo $row ["email"] ?></td>
			<td><?php echo $row ["jurusan"] ?></td>

		</tr>
		<?php $i++; ?>
	<?php endforeach; ?>


	</table>

</body>
</html>


