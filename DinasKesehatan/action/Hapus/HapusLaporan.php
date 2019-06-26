<?php 
	session_start();
	include '../../../koneksi.php';
	$id=$_POST['deleteid'];
	$datadelete=mysqli_query($koneksi,"DELETE FROM report where id='$id'");
	header("location:../../laporan.php");
?>