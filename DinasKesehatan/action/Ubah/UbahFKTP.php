<?php
include '../../../koneksi.php';
// menyimpan data kedalam variabel
        session_start();
        include '../../koneksi.php';
        $child_id=$_POST['ubahkoordinator'];
        $id=$_POST['ubahid'];
        $name = $_POST['ubahnama'];
        $person = $_POST['ubahpj'];
        $username=$_POST['ubahusername'];
        $password=$_POST['ubahpassword'];
        $role_id=$_POST['ubahpelayanan'];;
        $email = $_POST['ubahemail'];
        $queryparent=mysqli_query($koneksi,"SELECT area FROM user WHERE id='$child_id'");
        $dataparent=mysqli_fetch_assoc($queryparent);
        $area = $dataparent['area'];
   
        $phonenumber = $_POST['ubahtelepon'];
        $address = $_POST['ubahalamat'];
// query SQL untuk insert data
$query="UPDATE user SET role_id=$role_id,child_id=$child_id,name='$name',person='$person',username='$username',password='$password',area='$area',phonenumber='$phonenumber',address='$address' where id='$id'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:../../fktp.php");
?>