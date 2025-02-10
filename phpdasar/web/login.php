<?php
    echo '<link rel="stylesheet" type="text/css" href="ui.css">';

    $db = mysqli_connect("localhost","root","","login");
    if ($db->connect_error) {
        die("<div class='teksss'> Koneksi gagal:  " . $db->connect_error. "</div>");
    }
    echo "<div class='teksss'>Koneksi berhasil!</div>";
    

    if (isset($_POST["submit"])) {
        
        $nama = ($_POST["nama"]);
        $password = ($_POST["password"]);

        $query = " INSERT INTO registrasi VALUES
        ('','$nama','$password','')
        ";
        mysqli_query($db, $query);
    }

    

?>

<?php

    $cek = mysqli_connect("localhost","root","","login");

    echo ("hasil koneksi " .connection_status())

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN LOGIN</title>
    <link rel="stylesheet" href="i.css">
    <link href="https://fonts.googleapis.com/css2?family=Baskervville+SC&family=New+Amsterdam&family=Oswald:wght@200..700&family=Poppins&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body>

    <div class="hero">
        <img class="background" src="foto/background 4.jpg" alt="">
        <div class="logop"><img  src="logo/mjd store logo.webp" alt=""></div>

        <div class="registrasi"><a href="gf">registrasi</a></div>
        
        
        <div class="conten">

            

            <div class="isi">

                <div class="logo"><img src="logo/enter.png" alt=""></div>

                <h2>Sign in </h2>
                <div class="teks">Sign in to ignite your creativity and bring more joy to everything you do</div>
                
                <form action="" method="post">
                        <input type="teks" name="nama" placeholder="name" required>
                        <input type="password" name="password" placeholder="password" required>
                
                
            </div>
            <a href="Forget Password?">Forget Password?</a>
            <div class="btn">
                 <button  type="submit"  name="submit" >Create Account</button>
            </div>
            
                <a href="home.php">masuk ke home</a>
                </form>
        </div>
    </div>
    
</body>
</html>