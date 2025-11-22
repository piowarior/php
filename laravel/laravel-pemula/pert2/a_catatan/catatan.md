# catatan

- ketika kita membuild docker dan menggunakan mysql sebagai sistem manajemen database relasional  kita maka ingat ``` user root otomatis di buat sebagai super admin``` jadi jangan membuat user baru di docker dengan nama root atau di env 

- ternyata yang mengatur CRUD (Create, Read, Update, Delete) dalam database di laravel itu adalah ``` model ``` yang berperan sebagai penghubung antara aplikasi kita dengan database kita sebagai perwakilan tabel yang di wakilkan jadi bukan controler yah dia hanya mengatur lalu lintas aplikasi seperti misal file ini membutuhkan request data tampilan makadia arahkan untuk memanggil si model dengan si model menertakan sebuah fungsi membuat seolah olah model tidak terlihat gitu 

- alasan ada 2 port kek 80:80 nah itu adalah port (kiri) punya laptop kita (kanan) itu punya container kita . alasanya kenapa dua ? karena emang butuh 2 soal nya. kan container itu sebuahh wadah terpisah dengan laptop kita nah lalu di dalam kontainer itu ada apk apk (atau semacam Build Tools (alat alat buat ngebangun web nya )gitu ) nah dia juga butuh port (pintu masuk/keluar) nah kita sebagai orang luar ketika ingin mengakses aplikasi di kontainer perlu port (pintumasuk juga ) ingat karena kontainer itu terpisah . nah baru kita bisa mengakses apk apk nya gitu 
. lalu alasana utama nya karena jika di satukan nanti port laptop biasa aja tabrakan dengan portlain seperti apache dan lain lain kaerena default nya di setiing sama sama di port 80 

- port laptop di docker (kiri) bisa di ubah sesuai selera agar tidak tabrakan dengan yang lain

- port container (kanan) itu mengikuti isi dalam kontainer milik kita di sini kan saya ada nginx yang di kita akses keluar nah ingat fungsi yang di pakaikan port adalah apk atau tool yang di ajak keluar oleh kontainer oleh kita 

- ingat php artisan web serve dan npm run dev  itu beda 

- funfact alasan kalo kalian lagi build tampilan frontend dan ketika ada perubahan yang terrefresh hanya html atau gambar yang sudah terlink saja yang bakalan terrefresh tapi tidak untuk css dan js karena si browser itu menggunakan chacge untuk penyimpanan untuk menampilkan tampilan web untuk lebih cepat seperti (wadah) yang sudah di siapkan terlebih dahulu agar si browser tidak perlu bulak balik ngambil (download) barang yyang di simpan 

nih yang di chacge oleh si browser

- CSS
- JavaScript
- Gambar
- Font
- File yang ada di public/build

Kalau pakai Laravel Vite atau Mix, file build biasanya:

app.a8f2c1.css

app.b23c9d.js

- Responses tertentu : Misalnya API response yang punya header: