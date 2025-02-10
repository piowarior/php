<?php 
$mahasiswa = [

	["nama" => "maslili",
	"nim" => "20230801270",
	"jurusan" => "teknik informatika",
	"email" => "malilu @gmail.com",
	"gambar" => "eren.jpg"
    ],


	

["nama" => "malehoy",
	"nim" => "20230801274",
	"jurusan" => "teknik informatika",
	"email" => "malehoy @gmail.com",
	"gambar" => "marah.jpg"

]


];
// ["maslili","20230801270","teknik informatika","malilu @gmail.com"]
// jika ingin menampilkan array dengan echo secara manual cara nya gini

// echo $mahasiswa ["nama"];
	// maka akan muncul nama `maslili`

// echo $mahasiswa[1]["jurusan"];

 ?>

<!-- array assosiative -->
<!-- definisinya sama seperti array numerik,kecuali key nya adalah string yang kita buat sendiri -->
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>daftar mahasiswa</title>
 </head>
 <body>

<h1> daftar mahasiswa </h1>

<?php foreach ($mahasiswa as $a) : ?>
<ul>
	<li>
		<img src="img/<?= $a["gambar"]; ?>">
	</li>
	<li>nama :<?= $a["nama"]; ?></li>
	<li>nim :<?= $a["nim"]; ?></li>
	<li>jurusan :<?= $a["jurusan"]; ?></li>
	<li>email :<?= $a["email"]; ?></li>
</ul>
<?php endforeach; ?>

 
 </body>
 </html>