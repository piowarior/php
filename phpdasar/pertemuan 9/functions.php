<?php 

// koneksi ke data base
$db = mysqli_connect("localhost","root","","phpdasar");


function query($query)
{
	global $db;
$result = mysqli_query($db, $query);
$rows =[];
while( $row = mysqli_fetch_assoc($result))
	{
		$rows[] = $row;

	}
	return $rows;

}


function tambah ($data)
{
global $db;

$nama = htmlspecialchars($_POST["nama"]);
$nim = htmlspecialchars($_POST["nim"]);
$email = htmlspecialchars($_POST["email"]);
$jurusan = htmlspecialchars($_POST["jurusan"]);
$gambar = htmlspecialchars($_POST["gambar"]);// ini semua tujuannya di simpen masing masing dulu

// query insert data
$query = 
"
INSERT INTO mahasiswa VALUES

('','$nama','$nim','$email','$jurusan','$gambar')

";
mysqli_query($db,$query);

return mysqli_affected_rows($db);


}


function hapus($id)
{
	global $db;
mysqli_query($db, "DELETE FROM mahasiswa WHERE id = $id");
	
	return mysqli_affected_rows($db);

}




 ?>