<?php 
// sintaks php
// standar output
// echo
// print
// print_r
// var_dump

// variabel
// tidak bolah nama variable diawali angka tapi boleh kasih angka di akhir variable
// $1yuji ini SALAH
// $yuji1 ini BENAR


// operator
// + - / * %
// $a = 10;
// $b = 20;
// echo $a * $b;  ini bakalan langsung tampilin hasil operasi

// penggabungan string / concatenation / contat
// .
// $nama_depan = "rohisul"
// $nama_belakang = "iman"
// echo $nama_depan . $nama_belakang        hasilnya nama rohisuliman `tanpa spasi
// echo $nama_depan . " " . $nama_belakang    hasil nya rohisul iman menambahkan spasi

// assignment
// = , +=, -=, /=, *=, %=, .=
// %x = 1;
// %x = 5;  
// echo $x; maka hasil nya 5 karna ketimpa
// %y = 1;
// %y += 5; 
// echo $y; hasil nya 6 karna ada += 
// $nama = "rohisul"
// $nama .= " "
// $nama .= "iman"
// echo $nama; maka akan menghasil kan nama rohisul iman

// perbandingan
// <, >, <=, >=, ==, != 
// var_dump(1 < 2); ini bakalan cek true atau false hasil nya true
// var_dump(1 > 2); false
// var_dump(1 < "2");walaupun ini string karna pake var_dump maka akan di lihat menjadi angka maka hasil nya true

// identitas 
// ===, !==
// var_dump(1 === "1"); ini baru ngecek apakah ini string atau integer hasil nya false

//logika
// &&, ||, !
// $b = 10
// $c = 100
// var_dump($b > $c || $c % 2 == 0 )

$nama = "yuji";
 echo "hallo nama saya $nama";

 echo 'hallo nama saya $nama';

 ?>