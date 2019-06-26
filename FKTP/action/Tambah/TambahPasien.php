<?php
	session_start();
	include '../../../koneksi.php';
	 $user_id = $_SESSION['id'];
	 $nik = $_POST['nik'];
	 $name=$_POST['nama'];
	 $birthdate=date("Y-m-d",strtotime($_POST['tanggallahir']));
	 $diagnosis=$_POST['diagnosa'];
	 $visitdate=date("Y-m-d",strtotime($_POST['tanggalkunjungan']));
	 $gender=$_POST['jeniskelamin'];
	 $bday = new DateTime($birthdate);
	 $vday = new DateTime($visitdate);
	 $years=date("Y",strtotime($_POST['tanggalkunjungan']));
	 $diff = $vday->diff($bday);
	 $age= $diff->y;
	 $checkpasien = mysqli_query($koneksi,"SELECT * FROM patient WHERE nik='$nik' AND YEAR(visitdate) = '$years' AND user_id=$user_id AND disease_id='$diagnosis'");
	 $check = mysqli_num_rows($checkpasien);
	 $datacheck=array();
	  if($birthdate>$visitdate){
	 	header("location:../../pasienptm.php?data=null");
		close();
	 }
	 if($check>0){
	 	while($row=mysqli_fetch_assoc($checkpasien)){
			$datacheck[] = $row;
		}
		for ($i = 0; $i < $check; $i++){
			if($datacheck[$i]['nik']==$nik && $datacheck[$i]['disease_id']==$diagnosis && $datacheck[$i]['visitdate']==$visitdate){
				header("location:../../pasienptm.php?data=duplicate");
				close();
			}else{
			}
		}
		$checkdate=mysqli_query($koneksi,"SELECT MIN(visitdate) FROM patient WHERE nik='$nik' AND YEAR(visitdate)='$years' AND user_id='$user_id' AND disease_id='$diagnosis'");
			 	$mindate=mysqli_fetch_assoc($checkdate);
			 	if($visitdate>=$mindate['MIN(visitdate)']){
			 		$status="Lama";
				}else{
					$visitdatecheck=$mindate['MIN(visitdate)'];
					$idupdate=mysqli_query($koneksi,"SELECT id FROM patient where nik='$nik' AND visitdate='$visitdatecheck' AND user_id='$user_id' AND disease_id='$diagnosis' ");
					$vc=mysqli_fetch_assoc($idupdate);
					$idvc=$vc['id'];
					$rowupdate= mysqli_query($koneksi,"UPDATE patient SET status='Lama' WHERE id='$idvc'");
					$status="Baru";
				}
	 }else{
	 	$status="Baru";
	 }
	
	 $query = mysqli_query($koneksi, "INSERT INTO patient(id,user_id,nik,name,birthdate,disease_id,visitdate,gender,status,age) VALUES(null,'$user_id','$nik','$name','$birthdate','$diagnosis','$visitdate','$gender','$status','$age')");
	  header("location:../../pasienptm.php");
	  	//if delete nanti memindah variable baru ke row selanjutnya
	 //if update nanti melihat tanggal row selanjutnya dan row pertama 

// printf('%d , %d month, %d days', $diff->y, $diff->m, $diff->d);


?>