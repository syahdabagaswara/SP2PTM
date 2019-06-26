<?php
include '../../koneksi.php';
// menyimpan data kedalam variabel
        session_start();
        include '../../koneksi.php';
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
header("location:../fktp.php");
?>