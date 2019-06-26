<?php
include '../../../koneksi.php';
$id = $_POST['id'];
$query=mysqli_query($koneksi,"UPDATE messages SET status='baca' WHERE id='$id'");
?>