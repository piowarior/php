<?php 

// variabel scope / lingkup variabel

$x = 10;
// `function` mirip pake void variabel di luar lingkup nya gak bakalan ke baca kalo variabel x yang dalam function yoru belum di kasih nilai
function yoru()
{
	echo $x;
}
yoru();

 ?>

<!--      -->
<!-- disini kita kasih fungsi yang bernama global -->

 <?php 
 $y = 10;
 function yori()
{
	global $y;// fungsi global disini sebagai variabel yang mencari nilai `y` di luar function
	echo $y;
}
yori();

  ?>


  <!-- super global -->
  