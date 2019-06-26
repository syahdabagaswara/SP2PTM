<?php
include '../../../koneksi.php';
// menyimpan data kedalam variabel
        session_start();
        
        $child_id=$_SESSION['id'];
	$id=$_POST['ubahid'];
	$name = $_POST['ubahnama'];
        $person = $_POST['ubahpj'];
        $username=$_POST['ubahusername'];
        $password=$_POST['ubahpassword'];
        $role_id="3";
        $email = $_POST['ubahemail'];
        $area = $_POST['ubaharea'];
   
        $phonenumber = $_POST['ubahtelepon'];
        $address = $_POST['ubahalamat'];
// query SQL untuk insert data
$query="UPDATE user SET role_id=$role_id,child_id=$child_id,name='$name',person='$person',username='$username',password='$password',area='$area',phonenumber='$phonenumber',address='$address' where id='$id'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php

//         $msg="Data Berhasil Diubah";
//         $msga="Data Gagal Diubah";

//      // Show message when user added
//      if ($query) {
         

//          //kalau berhasil maka keluar alert yang berisi menambahkan data
         
//          echo "<script type='text/javascript'>alert('$msg');</script>";
         
         
         
//            } else {
         
//          //kalau gagal maka keluar alert yang berisi gagal menambahkan data
         
//          echo "<script type='text/javascript'>alert('$msga');</script>";
         
         
         
//            }
header("location:../../puskesmas.php");
?>