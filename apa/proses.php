<?php
include("koneksi.php");

 session_start();
    $nama=$_POST['nama'];    
    $gambar=$_POST['gambar'];    

    

 
    $b=mysqli_query($koneksi, "INSERT INTO baru(nama,gambar)
    value('$nama','$gambar')");

         $_SESSION['nama']=$nama;
         $_SESSION['gambar']=$gambar;

        if($b){
            header("location:halo.php");
        }

    

?>