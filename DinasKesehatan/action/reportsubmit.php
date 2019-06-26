<?php 
	session_start();
	include '../../koneksi.php';
	date_default_timezone_set('Asia/Jakarta');
	$now=date('Y-m-d');
	$month=date("m",strtotime($_POST['daterelease']));
	$year=date("Y",strtotime($_POST['daterelease']));
	$report_id=$_POST['reportid'];
	$user_id=$_SESSION['id'];
	$updatereport=mysqli_query($koneksi,"UPDATE report SET status='Selesai',datecomplete='$now' where id='$report_id'");
	header("location:../monitoring.php");
	 
?>