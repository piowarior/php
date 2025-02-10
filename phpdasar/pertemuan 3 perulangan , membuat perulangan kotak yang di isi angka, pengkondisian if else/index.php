<?php 
// pengulangan
// for
// while
// do.. while
// foreach:pengulangan khusus array

// for ($i=0; $i < 5; $i++) { 
// 	echo "malili ";
// }
// for ($i=0; $i < 5; $i++) { 
// 	echo "malilu <br>";
// }

// kalo pake while program mirip pake for aja

// $a =0;
// while ($a< 5) {
// 	echo "malilo <br>";
// 	$a++;
// }

// perbedaan nya kalo pake ini program akan dijalan kan dulu baru di priksa kondisi nya
// nanti ketika program menunjukan hasil false maka akan menambahkan hasil 1 walaupun hasilnya false
// karna program dijalankan dulu baru di priksa 
// sehingga ketika $b = 10; dan ketentuan program di jalankan nya seperti ini while ($b < 5) maka akan
// menampilkan `malehoy ` 1 kali nah itu salah harus nya

// $b =0;
// do {
	
// 	echo "malehoy <br>";
// 	$b++;
// } while ($b < 5);
 ?>

 <!-- <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>latihan 1</title>
 </head>
 <body>
 
<table border="1" cellpadding="10" cellspacing="0">
	<?php 
    for ($i=1; $i <= 3 ; $i++) { 
    	echo "<tr>";
        for ($j=1; $j <= 5 ; $j++){
        	echo "<td>$i,$j</td>";
        }
    	echo "</tr>";
    }
     
	 ?>
</table>

 </body>
 </html>
 -->
<!--  <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>latihan 2</title>
 </head>
 <body>
  
  <table border="1" cellpadding="10" cellspacing="0">
  	<?php for ($i=1; $i <=3 ; $i++) { ?>
    <tr>
    	<?php for ($j=1; $j <= 5 ; $j++) { ?>

    		<td><?php echo "$i,$j"; ?></td>

        <?php } ?>
    </tr>
  	<?php } ?>


  </table>

 </body>
 </html>
 -->
<!-- // ini bisa juga kayak begini -->
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>latihan 2</title>
<style>
    .warna-baris {
       background-color: silver;
    }

</style>

 </head>
 <body>
  
  <table border="1" cellpadding="10" cellspacing="0">
  	<?php for ($i=1; $i <=5 ; $i++) : ?>
        <?php if ($i %2 == 1) :?>
    <tr class="warna-baris">
    <?php else : ?>
        <tr>
    <?php endif; ?>
    	<?php for ($j=1; $j <= 5 ; $j++) : ?>

    		<td><?= "$i,$j"; ?></td>

        <?php endfor; ?>
    </tr>
  	<?php endfor; ?>


  </table>

 </body>
 </html>
