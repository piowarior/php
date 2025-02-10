<?php 
// pengulangan pada array
// for / forech
$angka =[2,3,43,11,27,1,78,49,51];



 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>latihan 2</title>
 	<style>
 		.kotak	{

 			width: 50px;
 			height: 50px;
 			background-color: salmon;
 			text-align: center;
 			line-height: 50px;
 			margin: 3px;
 			float: left;
 		}
        .clear	{clear: both;}
 	</style>
 </head>
 <body>
 
 <!-- kalo pake cara ini bagian for nya pasti manual ngisi nya kayak misal isi array ada 4 yah kita tulis nya i < 4 nah pake cara ini repot semisal kita mau nambahin element baru kedalam array nya $angka =[2,3,43,11,27,1,78,49,51]; -->
 <!-- <?php for ($i=0; $i < 9; $i++) { ?>
<div><?php echo $angka[$i];?></div>
<?php } ?> -->


<!-- nah kalo pake cara ini baru fungsi nya count($angka) untuk looping berhentinya sesuai isi array nya-->
<?php for ($i=0; $i < count($angka); $i++) { ?>
<div class="kotak"><?php echo $angka[$i];?></div>
<?php } ?>


<div class="clear"></div>

<!-- forech -->
<!-- arti nya foreach : untuk setiap element yang ada di dalam array lakukan sesuatu  -->
	
<?php foreach ($angka as $a ) { ?>
	<div class="kotak"><?php echo $a; ?></div>
<?php } ?>

<div class="clear"></div>

<!-- forech versi lebih simpel dan mudah di pahami -->
<?php foreach($angka as $a ) : ?>
	<div class="kotak"><?= $a; ?></div>
<?php endforeach; ?>

 </body>
 </html>