<?php 
require 'functions.php';


$id = $_GET["id"];

if ( hapus ($id)> 0 )
{

    echo "data berhasil di hapus";
	header("refresh:5;url=index.php");
    exit;

}else
{

	echo "data gagal di dihapus";
	header("refresh:5;url=index.php");
    exit;

}


 ?>