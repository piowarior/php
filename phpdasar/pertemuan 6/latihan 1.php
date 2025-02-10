<!-- <?php 

// membuat array
$hari = array("senin","selasa","rabu");
$bulan = ["januari","februari","maret"];
$arr = [123,"teks",false];


// menampilkan array versi debugging

var_dump($hari);
echo "<br>";
print_r($bulan);

// menampilkan 1 elemn pada array

echo $arr[0];

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

 ?> -->

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>latihan array</title>
 	<style>
 		.kotak {
 			width: 30px;
 			height: 30px;
 			background-color: #BADA55;
 			text-align: center;
 			line-height: 30px;
 			margin: 3px;
 			float: left;
 			transition: 1s;


 		}
 		.kotak:hover {

 			transform: rotate(360deg);
 			border-radius: 50%;
 		}
 		.clear
 		{
 			clear: both;
 		}


 	</style>
 </head>
 <body>


 	<!-- ini bagian yang mencetak angka dalam kotak yang bakalan muter  -->
 	<!-- bagian 1 -->
 	<!-- <?php 
 	$angka = [1,2,3,4,5,6,7,8,9];
 	 ?>

 	<?php foreach ($angka as $a ) :?>
 	 	<div class="kotak"><?= $a ;  ?></div>
 	 <?php endforeach; ?> -->


 	 <!-- bagian 2 -->
 	<!-- <?php 
 	// ini bagian untuk mencetak array multi dimensi `$angka [1][1] ` [1] yang pertama maksud nya indeks array terluar nya yang 1 yang isi nya `[4,5,6]` kemudian [1] yang kedua index pertama dalam array `[1]` yang isi nya angka 5 maka akan mencetak angka 5
 	//  $angka = [[1,2,3],[4,5,6],[7,8,9]];
     // echo $angka [1][1];

 	 ?> -->

 	 <?php $angka = [[1,2,3],[4,5,6],[7,8,10]]; ?>

     <?php foreach ($angka as $a ) :?>
     	<?php foreach ($a as $b) : ?>
 	 		<div class="kotak"><?= $b ;  ?></div>
 	 	<?php endforeach; ?>
 	 	<div class="clear"></div>
 	 <?php endforeach; ?>
 	



 	
 
 </body>
 </html>