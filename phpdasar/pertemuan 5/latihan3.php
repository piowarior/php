<?php 
$mahasiswa = [
	["roisul","20230801270","teknik informatika","rohisul @gmail.com"],
	["malehoy","20230801274","teknik informatika","malili @gmail.com"]

];


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>daftar mahasiswa</title>
 </head>
 <body>
 

<h1>daftar mahasiswa</h1>

<?php foreach ($mahasiswa as $mhs) : ?>

<ul>

	<li><?= $mhs [0];?></li>
	<li><?= $mhs [1];?></li>
	<li><?= $mhs [2];?></li>
	<li><?= $mhs [3];?></li>

	<!-- <?php foreach( $mahasiswa as $mhs ) : ?>
		<li>
			<?=$mhs;  ?>
		</li>
	<?php endforeach; ?> -->

</ul>

<?php endforeach; ?>

 </body>
 </html>