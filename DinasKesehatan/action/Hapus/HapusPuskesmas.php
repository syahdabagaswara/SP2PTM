<?php
include '../../../koneksi.php';
// menyimpan data kedalam variabel
		$id = $_POST['deleteid'];
		
// query SQL untuk insert data
$query=mysqli_query($koneksi,"DELETE from user where id='$id'");


// mengalihkan ke halaman index.php
header("location:../../puskesmas.php");

?>