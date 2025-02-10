<?php 

// date
// untuk menampilkan tanggal tertentu dengan format tertentu
	// echo date("l, d-M-Y");

// time
// unix timestamp/ epoch time
// detik yang sudah berlalu dari 1 januari 1970
// intinya waktu kesepakatan it di mulai nya suatu waktu
// nanti bakalan mucul waktu banyak kek misal 1709797349

	// echo time();
 // echo date("l, d M Y", time()+60*60*24*100);

 // mktime
 // membuat sendiri detik
 // mktime(0,0,0,0,0,0,)
 // jam, menit, detik, bulan, tanggal, tahun

 echo mktime(0,0,0,8,25,1986);

echo date ("l d M Y",mktime(0,0,0,8,25,1985));

echo "<br>";
//strtotime
// sama aja beda nya ini di tulis nya pke string
echo date("l", strtotime("25 aug 1985"));

 ?>