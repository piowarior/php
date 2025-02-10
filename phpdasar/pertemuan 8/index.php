<?php 
// koneksi ke database
// $db = mysqli_connect("localhost","root","","phpdasar");

require 'functions.php';// memanggil fungsi dari file "functions.php"
$mahasiswa = query("SELECT * FROM mahasiswa");

// ambil data dari tabel mahasiswa / query data mahasiswa

// $result = mysqli_query($db,"SELECT * FROM mahasiswa");

// var_dump($result);

// if(!$result)
// {
// 	echo mysqli_error($db);
// }

// ambil data (fect) mahasiswa dari objeck result
// mysqli_fetch_row() // mengembalikan array numerik

// $a = mysqli_fetch_row($result);
// var_dump($a[3]);

// mysqli_fetch_assoc()// mengembalikan array assosiativ => paling di anjurkan

// $a = mysqli_fetch_assoc($result);
// var_dump($a["email"]);

// mysqli_fetch_array()// mengembalikan array numerik / assosiativ kekurangan nya ukuran file nya jadi banyak 
// $a = mysqli_fetch_assoc($result);
// var_dump($a);

// mysqli_fetch_object()//

// $a = mysqli_fetch_object($result);
// var_dump($a->email);
// var_dump($a["email"]); gak bakalan bisa mau pake assos atau pake numerik

// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

// while ($a = mysqli_fetch_assoc($result))
// {
// 	var_dump($a);// ini buat nampili semua isi data bases
// 	// var_dump($a["email"]); kalou mau nampilin email nya aja tapi semua nya 
// }


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
				<a href="">hapus</a>

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


