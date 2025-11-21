# catatan

- ketika kita membuild docker dan menggunakan mysql sebagai sistem manajemen database relasional  kita maka ingat ``` user root otomatis di buat sebagai super admin``` jadi jangan membuat user baru di docker dengan nama root atau di env 

- ternyata yang mengatur CRUD (Create, Read, Update, Delete) dalam database di laravel itu adalah ``` model ``` yang berperan sebagai penghubung antara aplikasi kita dengan database kita sebagai perwakilan tabel yang di wakilkan jadi bukan controler yah dia hanya mengatur lalu lintas aplikasi seperti misal file ini membutuhkan request data tampilan makadia arahkan untuk memanggil si model dengan si model menertakan sebuah fungsi membuat seolah olah model tidak terlihat gitu 

- alasan ada 2 port kek 80:80 nah itu adalah port (kiri) punya laptop kita (kanan) itu punya container kita . alasanya kenapa dua ? karena emang butuh 2 soal nya. kan container itu sebuahh wadah terpisah dengan laptop kita nah lalu di dalam kontainer itu ada apk apk (atau semacam Build Tools (alat alat buat ngebangun web nya )gitu ) nah dia juga butuh port (pintu masuk/keluar) nah kita sebagai orang luar ketika ingin mengakses aplikasi di kontainer perlu port (pintumasuk juga ) ingat karena kontainer itu terpisah . nah baru kita bisa mengakses apk apk nya gitu 

