<?php 

require 'functions.php';


$db = mysqli_connect("localhost","root","","phpdasar");

// cek apkah  tombol sub,it sudah di pencet atau belum
if (isset($_POST["submit"])) {// cek fungsi alamat post yang ini form action="" method="post" yang bervariabel submit sudah di pencet atau belum



// cek apakah data berhasil masuk atau tidak 
if (tambah($_POST)>0) {
echo "data berhasil di tambahkan";

header("refresh:5;url=index.php");
    exit;

}else
{


	echo "data gagal di tambahkan";
	header("refresh:5;url=index.php");
    exit;

	// echo "
	// <script>
	// alert('data gagal ditambahkan');
	// document.location.href = 'index.php';
	// </script>
	// ";// <script> bahasa js fungsinya untuk tampilan berhasil tapi user harus input oke maka akan kembali ke halaman index
}


}
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>tambah data mahasiswa </title>
</head>
<body>
	<h1>TAMBAH DATA MAHASISWA </h1>

	<form action="" method="post">
		
		<ul>
			<li>


					<label for="a" style="font-family: Arial, sans-serif;
                     font-size: 16px;
                     color: #333;
                     background-color: #f2f2f2;
                     padding: 10px 20px;
                     border-radius: 5px;
                     box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                     transition: background-color 0.3s ease;">
					 Nama
					</label>
					<input type="teks" name="nama" id="a"required>
			</li>
			<br>
			<br>
			<li>

					<label for="a" style="font-family: Arial, sans-serif;
                     font-size: 16px;
                     color: #333;
                     background-color: #f2f2f2;
                     padding: 10px 20px;
                     border-radius: 5px;
                     box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                     transition: background-color 0.3s ease;">
					 Nim
					</label>
					<input type="teks" name="nim" id="a"required>
			</li>
			<br>
			<br>
			<li>
					<label for="a" style="font-family: Arial, sans-serif;
                     font-size: 16px;
                     color: #333;
                     background-color: #f2f2f2;
                     padding: 10px 20px;
                     border-radius: 5px;
                     box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                     transition: background-color 0.3s ease;">
					 email
					</label>
					<input type="teks" name="email" id="a"required>
			</li>
			<br>
			<br>
			<li>

					<label for="a" style="font-family: Arial, sans-serif;
                     font-size: 16px;
                     color: #333;
                     background-color: #f2f2f2;
                     padding: 10px 20px;
                     border-radius: 5px;
                     box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                     transition: background-color 0.3s ease;">
					 jurusan
					</label>
					<input type="teks" name="jurusan" id="a"required>
			</li>
			<br>
			<br>
			<li>

					<label for="a" style="font-family: Arial, sans-serif;
                     font-size: 16px;
                     color: #333;
                     background-color: #f2f2f2;
                     padding: 10px 20px;
                     border-radius: 5px;
                     box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                     transition: background-color 0.3s ease;">
					 gambar
					</label>
					<input type="teks" name="gambar" id="a"required>
			</li>
			<br>
			<br>
			<li>
				<button type="submit" name="submit" style="background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 12px;
  border: 2px solid #4CAF50;" > konfirmasi </button>

			</li>

		</ul>



	</form>

</body>
</html>