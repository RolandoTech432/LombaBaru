<?php
include ("koneksi.php");
         
    $nama=$_POST['nama'];  
    $username=$_POST['username'];     
    $password=$_POST['password'];
    $email=$_POST['email'];
    $level=$_POST['level'];
    $mobile=$_POST['mobile'];
    
    $b=mysqli_query($koneksi, "INSERT INTO user(nama,username,password,email,level,mobile)value('$nama','$username','$password','$email','$level','$mobile')");

        if($b){
           
            echo "<script> window.alert('Data Berhasil Ditambah') </script> ";
            
        }

   

?>