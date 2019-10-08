<?php
include ("koneksi.php");
         
    $nama=$_POST['nama'];  
    $username=$_POST['username'];     
    $password=$_POST['password'];
    $mobile=$_POST['mobile'];
    $company=$_POST['company'];
    $email=$_POST['email'];
    $level=$_POST['level'];
    
    $b=mysqli_query($koneksi, "INSERT INTO user(nama,username,password,mobile,company,email,level)
    value('$nama','$username','$password','$mobile','$company','$email','$level')");

        if($b){
           
           header("location:login.php");

        }

   

?>