<?php 
	session_start();
	include '../../koneksi.php';
	date_default_timezone_set('Asia/Jakarta');
	$now=date('Y-m-d');
	$month=date("m",strtotime($_POST['daterelease']));
	$year=date("Y",strtotime($_POST['daterelease']));
	$report_id=$_POST['reportid'];
	$user_id=$_SESSION['id'];
	$datasubmit=array();
	$datareport=mysqli_query($koneksi,"SELECT * FROM patient where YEAR(visitdate)='$year' AND MONTH(visitdate)='$month' AND user_id='$user_id'");
	$datarow=mysqli_num_rows($datareport);
	while($submit=mysqli_fetch_assoc($datareport)){
		$datasubmit[]=$submit;
	}
	print_r($datasubmit);
	for($x=0;$x<$datarow;$x++){
	 $nik = $datasubmit[$x]['nik'];
	 $name=$datasubmit[$x]['name'];
	 $birthdate=date("Y-m-d",strtotime($datasubmit[$x]['birthdate']));
	 $diagnosis=$datasubmit[$x]['disease_id'];
	 $visitdate=date("Y-m-d",strtotime($datasubmit[$x]['visitdate']));
	 $gender=$datasubmit[$x]['gender'];
	 $age= $datasubmit[$x]['age'];
	 $checkpasien = mysqli_query($koneksi,"SELECT * FROM datareport WHERE nik='$nik' AND YEAR(visitdate) = '$year' AND disease_id='$diagnosis'");
	 $check = mysqli_num_rows($checkpasien);
	 $datacheck=array();
	 if($check>0){
	 	while($row=mysqli_fetch_assoc($checkpasien)){
			$datacheck[] = $row;
		}
		for ($i = 0; $i < $check; $i++){
			if($datacheck[$i]['nik']==$nik && $datacheck[$i]['disease_id']==$diagnosis && $datacheck[$i]['visitdate']==$visitdate){
				continue 2;
			}else{
			}
		}
		$checkdate=mysqli_query($koneksi,"SELECT MIN(visitdate) FROM datareport WHERE nik='$nik' AND YEAR(visitdate)='$year' AND disease_id='$diagnosis'");
			 	$mindate=mysqli_fetch_assoc($checkdate);
			 	if($visitdate>=$mindate['MIN(visitdate)']){
			 		$status="Lama";
				}else{
					$visitdatecheck=$mindate['MIN(visitdate)'];
					$idupdate=mysqli_query($koneksi,"SELECT id FROM datareport where nik='$nik' AND visitdate='$visitdatecheck' AND disease_id='$diagnosis' ");
					$vc=mysqli_fetch_assoc($idupdate);
					$idvc=$vc['id'];
					$rowupdate= mysqli_query($koneksi,"UPDATE datareport SET status='Lama' WHERE id='$idvc'");
					$status="Baru";
				}
	 }else{
	 	$status="Baru";
	 }
	
	 $query = mysqli_query($koneksi, "INSERT INTO datareport(id,report_id,nik,name,birthdate,disease_id,visitdate,gender,status,age) VALUES(null,'$report_id','$nik','$name','$birthdate','$diagnosis','$visitdate','$gender','$status','$age')");
	  
	 }
	 $updatereport=mysqli_query($koneksi,"UPDATE report SET status='Selesai',datecomplete='$now' where id='$report_id'");
	 $statusme="belum";
	 $messages="Terima Kasih Telah Melakukan Pelaporan";
	 $imessages=mysqli_query($koneksi,"INSERT INTO messages(id,id_user,messages,date,status)VALUES(null,'$user_id','$messages','$now','$statusme')");
	 $dadn=mysqli_query($koneksi,"SELECT b.id,a.name FROM user a,user b WHERE a.id='$user_id' AND b.id=a.child_id");
	 while($rowdn=mysqli_fetch_assoc($dadn)){
		$datadn[] = $rowdn;
		}
		$iddn=$datadn[0]['id'];
		$namedn=$datadn[0]['name'];
		$messagesDN=$namedn." Telah Menyelesaikan Pelaporan";
		
	 $inmessages=mysqli_query($koneksi,"INSERT INTO messages(id,id_user,messages,date,status)VALUES(null,'$iddn','$messagesDN','$now','$statusme')");
	 header("location:../monitoring.php");
	 
?>