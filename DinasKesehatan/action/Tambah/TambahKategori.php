<?php
	session_start();
    include '../../../koneksi.php';
    $role=$_POST['kategori'];
    $query=mysqli_query($koneksi,"INSERT INTO role(id,role)VALUES(null,'$role')");
    header("location:../../kategoripelayanan.php");

?>