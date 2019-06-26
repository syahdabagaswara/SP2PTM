<?php
	session_start();
    include '../../../koneksi.php';
    $id=$_POST['ubahid'];
    $role=$_POST['ubahkategori'];
    $query=mysqli_query($koneksi,"UPDATE role SET role='$role' WHERE id='$id'");
    header("location:../../kategoripelayanan.php");

?>