<?php 
// array 
// variabel yang memiliki lebih dari satu nilai / banyak
// elemen aray boleh memiliki tipe data yang berbeda
// pasangan antar key dan value
// key_nya adalah index ,yang di mulai dari 0



//membuat aray dengan cara lama
$hari = array("senin","selasa","rabu");


//membuat aray dengan cara baru
$bulan = ["januari","februari","maret"];

//membuat array tipe data berbeda
$arr1 = [123,"ruji", false];


// menampilkan array ke layar
// tidak bisa hanya menggunakan echo
// kayak seperti ini `echo ($bulan);` nah ini gak bisa nanti bakalan eror
// jadi solusinya bisa pake var_dump() / print_r() 
var_dump($bulan);

echo "<br>";
print_r($bulan);
// Array ( [0] => januari [1] => februari [2] => maret )
// nah bagian key nya itu yang [0 1][2] terus bagian value nya yang `januari,februari....`


// menampilkan 1 elemen pada array cuman 1 saja karna kalo semua nya gak bisa kalo pake `echo`
echo "<br>";
echo $bulan[1];
echo $arr1[0];

//menambahkan elemn baru pada array
$hari[] = "kamis";
echo "<br>";
var_dump($hari);
// maka array `$hari[]` akan bertambah dengan tambahan elemen `kamis`

 ?>