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

  	<ul>
  	<?php foreach ($mahasiswa as $a ) : ?>
  		<li>
  <a href="detailmahasiswa.php?nama=<?= $a["nama"]; ?>&nim= <?= $a ["nim"]; ?>&email= <?= $a ["email"]; ?>&jurusan= <?= $a ["jurusan"]; ?>& gambar= <?= $a ["gambar"]; ?>"> <?=$a ["nama"]; ?></a>
  				
  		</li>
  		

  	<?php endforeach; ?>
  	</ul>
  	
  
  </body>
  </html>