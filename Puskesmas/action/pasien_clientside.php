<?php
	include '../koneksi.php';
	$user_id=$_SESSION['id'];
	$data=array();
	$result = mysqli_query($koneksi,"SELECT a.*,b.name as penyakit,b.id as idd FROM patient a,disease b WHERE a.user_id='$user_id' AND a.disease_id=b.id");
	$rowresult = mysqli_num_rows($result);
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_assoc($result)){
			$data[] = $row;
		}
	}

 ?>