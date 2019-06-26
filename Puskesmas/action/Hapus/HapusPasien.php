<?php
	session_start();
	include '../../../koneksi.php';
	$id=$_POST['deleteid'];
	$query=mysqli_query($koneksi,"SELECT * FROM patient where id='$id'");
	$data=mysqli_fetch_assoc($query);
	$user_id = $_SESSION['id'];
	$nik = $data['nik'];
	$diagnosis=$data['disease_id'];
	$visitdate=date("Y",strtotime($data['visitdate']));
	$rowdatacheck=mysqli_query($koneksi,"SELECT MIN(visitdate) FROM patient where user_id='$user_id' AND disease_id='$diagnosis' AND nik='$nik' AND YEAR(visitdate)='$visitdate' AND id!='$id' ");
	$datacheck=mysqli_fetch_assoc($rowdatacheck);
	$datadate=$datacheck['MIN(visitdate)'];
	$dataupdate=mysqli_query($koneksi,"SELECT * FROM patient where user_id='$user_id' AND disease_id='$diagnosis' AND nik='$nik' AND visitdate='$datadate' AND id!='$id'");
	$dataup=mysqli_fetch_assoc($dataupdate);
	$dataidupdate=$dataup['id'];
	 echo $dataidupdate;
	if($data['status']=="Baru"){
		$queryupdate=mysqli_query($koneksi,"UPDATE patient SET status='Baru' WHERE id='$dataidupdate'");
		$query=mysqli_query($koneksi,"DELETE FROM patient where id='$id'");
	}else{
		$query=mysqli_query($koneksi,"DELETE FROM patient where id='$id'");
	}
	header("location:../../pasienptm.php");
?>