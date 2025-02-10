<?php 
$_GET ["nama"] = ["malili"];
var_dump($_GET);

 ?>

 <?php 
 $mahasiswa = 
 [

[
	"nama" => "malilo",
	"nim" => "27341829770",
	"jurusan" => "teknik informatika",
	"email" => "malehoy @gmail.com",
	"gambar" => "eren.jpg"

],
[
	"nama" => "mali",
	"nim" => "27341829732",
	"jurusan" => "teknik informatika",
	"email" => "maliyun @gmail.com",
	"gambar" => "marah.jpg"
]

 ]

  ?>

  <!DOCTYPE html>
  <html>
  <head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>get</title>
  </head>
  <body>
  	<h1>daftar mahasiswa</h1>
  	<?php foreach ($mahasiswa as $a ) : ?>
  		<ul>
  			<li><img src="img/<?= $a["gambar"];?>"></li>
  			<li><?=$a ["nama"];  ?></li>
  			<li><?=$a["nim"]; ?></li>
  			<li></li>
  		</ul>

  	<?php endforeach; ?>
  
  </body>
  </html>