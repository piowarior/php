<!-- <?php 
function salam($y, $x)
{
	return "selamat $y,$x";
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>latihan function</title>
 </head>
 <body>
 	
 	<h1><?= salam("pagi","malili"); ?></h1>

 </body>
 </html> -->

<!-- // ini versi ketika parameter salam `salam("pagi","malili");` yang ini isi nya kosong / atau hanya sebagian saja 
// maka program tidak akan jalan jadi eror
// jadi seperti ini salam(); karena parametter di php ada 2 `function salam($y, $x)` -->


 <!-- <?php 
function salam($y, $x)
{
	return "selamat $y,$x";
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>latihan function</title>
 </head>
 <body>
 	
 	<h1><?= salam(); ?></h1>

 </body>
 </html> -->

<!-- // tapi masih bisa di akalin dengan meambahkan nilai di variabel parametter salam di php 
// function salam($y, $x) ini di tambahkan sebuah nilai menjadi 
// function salam($y = "datang", $x = "admin" ) -->



 <?php 
function salam($y = "datang", $x = "admin" )
{
	return "selamat $y,$x";
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>latihan function</title>
 </head>
 <body>
 	
 	<h1><?= salam(); ?></h1>

 </body>
 </html>