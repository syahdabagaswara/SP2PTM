<?php
	session_start();
	include '../../../koneksi.php';
	$user_id = $_SESSION['id'];
	$id=$_POST['ubahid'];
	 $nik = $_POST['ubahnik'];
	 $name=$_POST['ubahnama'];
	 $birthdate=date("Y-m-d",strtotime($_POST['ubahtanggallahir']));
	 $diagnosis=$_POST['ubahdiagnosa'];
	 $visitdate=date("Y-m-d",strtotime($_POST['ubahtanggalkunjungan']));
	 $gender=$_POST['ubahjeniskelamin'];
	 $bday = new DateTime($birthdate);
	 $vday = new DateTime($visitdate);
	 $diff = $vday->diff($bday);
	 $age= $diff->y;
	 if($birthdate>$visitdate){
	 	header("location:../../pasienptm.php?data=null");
		close();
	 }
	 $datapatient=mysqli_query($koneksi,"SELECT * FROM patient where id='$id'");
	 $data=array();
	 
	 while($row=mysqli_fetch_assoc($datapatient)){
			$data[] = $row;
		}
	 $nikbefore=$data[0]['nik'];
	 $diagnosisbefore=$data[0]['disease_id'];
	 $visitdatebefore=$data[0]['visitdate'];
	 $years=date("Y",strtotime($data[0]['visitdate']));
	 $newvisitdate=date("Y",strtotime($_POST['ubahtanggalkunjungan']));
	 $checkrowold=mysqli_query($koneksi,"SELECT MIN(visitdate) FROM patient where user_id='$user_id' AND disease_id='$diagnosisbefore' AND nik='$nikbefore' AND YEAR(visitdate)='$years' AND id !='$id' ");
	 $daterowold=mysqli_fetch_assoc($checkrowold);
	 $dateold=$daterowold['MIN(visitdate)'];
	 $datarowold=mysqli_query($koneksi,"SELECT * FROM patient where user_id='$user_id' AND disease_id='$diagnosisbefore' AND nik='$nikbefore' AND visitdate='$dateold'");
	 $dataold=mysqli_fetch_assoc($datarowold);
	 $oldid=$dataold['id'];
	 $nikold=$dataold['nik'];
	 $diagnosisold=$dataold['disease_id'];
	 $visitold=date("Y",strtotime($dataold['visitdate']));
	 $checkrownew=mysqli_query($koneksi,"SELECT MIN(visitdate) FROM patient where user_id='$user_id' AND disease_id='$diagnosis' AND nik='$nik' AND YEAR(visitdate)='$newvisitdate' ");
	 $daterownew=mysqli_fetch_assoc($checkrownew);
	 $datenew=$daterownew['MIN(visitdate)'];
	 $datarownew=mysqli_query($koneksi,"SELECT * FROM patient where user_id='$user_id' AND disease_id='$diagnosis' AND nik='$nik' AND visitdate='$datenew'");
	 $datanew=mysqli_fetch_assoc($datarownew);
	 $newid=$datanew['id'];
	 $newyearsvisit=date("Y",strtotime($datanew['visitdate']));
	 $checkpasien = mysqli_query($koneksi,"SELECT * FROM patient WHERE nik='$nik' AND YEAR(visitdate) = '$years' AND user_id=$user_id AND disease_id='$diagnosis' AND id !='$id'");
	 $check = mysqli_num_rows($checkpasien);
	 $datacheck=array();
	 $checkpatient = mysqli_query($koneksi,"SELECT * FROM patient WHERE nik='$nik' AND YEAR(visitdate) = '$years' AND user_id=$user_id AND disease_id='$diagnosis' AND id !='$id'");
	 $patientnewrow = mysqli_num_rows($checkpatient);
	 $dataafter=array();
	 if($nik==$nikold AND $diagnosis==$diagnosisold AND $newvisitdate==$yearsold ){
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
	 	if($data[0]['status']=="Baru"){
	 		if($visitdate>$dateold){
	 				$querychange=mysqli_query($koneksi,"UPDATE patient SET status='Baru'where id='$oldid'");
			 		$queryupdate=mysqli_query($koneksi,"UPDATE patient SET nik='$nik',name='$name',birthdate='$birthdate',disease_id='$diagnosis',visitdate='$visitdate',gender='$gender',status='Lama',age='$age' where id='$id'");
			 		
				}else{
					$queryupdate=mysqli_query($koneksi,"UPDATE patient SET nik='$nik',name='$name',birthdate='$birthdate',disease_id='$diagnosis',visitdate='$visitdate',gender='$gender',status='Lama',age='$age' where id='$id'");
					
				}
		}else if($data[0]['status']=="Lama"){
			if($visitdate<$dateold){
	 				$querychange=mysqli_query($koneksi,"UPDATE patient SET status='Lama'where id='$oldid'");
			 		$queryupdate=mysqli_query($koneksi,"UPDATE patient SET nik='$nik',name='$name',birthdate='$birthdate',disease_id='$diagnosis',visitdate='$visitdate',gender='$gender',status='Baru',age='$age' where id='$id'");
			 		
				}else{
					$queryupdate=mysqli_query($koneksi,"UPDATE patient SET nik='$nik',name='$name',birthdate='$birthdate',disease_id='$diagnosis',visitdate='$visitdate',gender='$gender',status='Lama',age='$age' where id='$id'");
					
				}
		}else{
			echo "gagal";
		}
	 }else if($nik==$datanew['nik'] AND $diagnosis==$datanew['disease_id'] AND $newvisitdate==$newyearsvisit ){
	 	while($row=mysqli_fetch_assoc($checkpatient)){
			$dataafter[] = $row;
		}
		for ($i = 0; $i < $patientnewrow; $i++){
			if($dataafter[$i]['nik']==$nik && $dataafter[$i]['disease_id']==$diagnosis && $dataafter[$i]['visitdate']==$visitdate){
				header("location:../../pasienptm.php?data=duplicate");
				close();
			}else{
			}
		}
		if($data[0]['status']=="Baru"){
	 		if($visitdate>$datenew){
	 				$querychange=mysqli_query($koneksi,"UPDATE patient SET status='Baru'where id='$oldid'");
			 		$queryupdate=mysqli_query($koneksi,"UPDATE patient SET nik='$nik',name='$name',birthdate='$birthdate',disease_id='$diagnosis',visitdate='$visitdate',gender='$gender',status='Lama',age='$age' where id='$id'");
			 		

				}else{
					$querychange=mysqli_query($koneksi,"UPDATE patient SET status='Baru'where id='$oldid'");
					$querychange=mysqli_query($koneksi,"UPDATE patient SET status='Lama'where id='$newid'");
					$queryupdate=mysqli_query($koneksi,"UPDATE patient SET nik='$nik',name='$name',birthdate='$birthdate',disease_id='$diagnosis',visitdate='$visitdate',gender='$gender',status='Baru',age='$age' where id='$id'");
					
				}
		}else if($data[0]['status']=="Lama"){
			if($visitdate<$datenew){
	 				$querychange=mysqli_query($koneksi,"UPDATE patient SET status='Baru'where id='$oldid'");
					$querychange=mysqli_query($koneksi,"UPDATE patient SET status='Lama'where id='$newid'");
					$queryupdate=mysqli_query($koneksi,"UPDATE patient SET nik='$nik',name='$name',birthdate='$birthdate',disease_id='$diagnosis',visitdate='$visitdate',gender='$gender',status='Baru',age='$age' where id='$id'");
					
				}else{
					$querychange=mysqli_query($koneksi,"UPDATE patient SET status='Baru'where id='$oldid'");
			 		$queryupdate=mysqli_query($koneksi,"UPDATE patient SET nik='$nik',name='$name',birthdate='$birthdate',disease_id='$diagnosis',visitdate='$visitdate',gender='$gender',status='Lama',age='$age' where id='$id'");
			 		
				}
		}else{
			echo "gagal";
		}
	 } else{
	 	$querychange=mysqli_query($koneksi,"UPDATE patient SET status='Baru'where id='$oldid'");
		$queryupdate=mysqli_query($koneksi,"UPDATE patient SET nik='$nik',name='$name',birthdate='$birthdate',disease_id='$diagnosis',visitdate='$visitdate',gender='$gender',status='Baru',age='$age' where id='$id'");
		
	 }
	 header("location:../../pasienptm.php");
	 
	
	 
?>