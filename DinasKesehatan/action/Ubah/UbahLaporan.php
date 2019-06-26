<?php
	session_start();
	include '../../../koneksi.php';
	$id=$_POST['ubahid'];
	$user_id = $_SESSION['id'];
	$daterelease = date("Y-m-d",strtotime($_POST['ubahperiode']));
	$daterequest = date("Y-m-d",strtotime($_POST['ubahtanggalmulai']));

	$duedatefktp = date("Y-m-d",strtotime($_POST['ubahbataswaktufktp']));
	$duedateps = date("Y-m-d",strtotime($_POST['ubahbataswaktups']));

	$duedate = date("Y-m-d",strtotime($_POST['ubahbataswaktu']));
	$monthrelease=date("m",strtotime($daterelease));
	$month=date("F",strtotime($daterelease));
	$yearsrelease=date("Y",strtotime($daterelease));
	$yearssrelease=date("y",strtotime($daterelease));
	 if($daterelease>=$daterequest||$daterelease>=$duedatefktp||$daterelease>=$duedateps||$daterelease>=$duedate){
	 	header("location:../../laporan.php?datereport=error");
		close();
	 }else if($daterequest>=$duedatefktp||$daterequest>=$duedateps||$daterequest>=$duedate){
	 	header("location:../../laporan.php?daterequest=error");
	 	close();
	 }else if($duedatefktp>=$duedateps||$duedatefktp>=$duedate){
	 	header("location:../../laporan.php?datereport=error");
		close();
	 }else if ($duedateps>=$duedate) {
	 	header("location:../../laporan.php?datereport=error");
		close();
	 }else{

	 }
	$monthupdate=mysqli_query($koneksi,"UPDATE report SET daterequest='$daterequest',duedate='$duedate',status='Proses' WHERE id='$id'");
	$pusupdate=mysqli_query($koneksi,"SELECT id FROM report WHERE child_id='$id'");
	$punum=mysqli_num_rows($pusupdate);
	while($row=mysqli_fetch_assoc($pusupdate)){
		$datapus[]=$row;
	}
	print_r($datapus);
	for($i=0;$i<$punum;$i++){
		$datafk=array();
		$idps=$datapus[$i]['id'];
		$updatepus=mysqli_query($koneksi,"UPDATE report SET daterequest='$daterequest',duedate='$duedateps',status='Proses' where id='$idps' AND status='Proses' OR status='Terlambat'");
		$fkupdate=mysqli_query($koneksi,"SELECT id FROM report where child_id='$idps'");
		$fknumrow=mysqli_num_rows($fkupdate);
		while($rowfk=mysqli_fetch_assoc($fkupdate)){
			$datafk[]=$rowfk;
		}
	
		for($j=0;$j<$fknumrow;$j++){
			$idfk=$datafk[$j]['id'];
			$updatefk=mysqli_query($koneksi,"UPDATE report SET daterequest='$daterequest',duedate='$duedatefktp',status='Proses' where id='$idfk' AND status='Proses' OR status='Terlambat'");
		}
	}

	// $dataupdate=mysqli_query($koneksi," SELECT * FROM report WHERE child_id IS NOT NULL AND YEAR(daterelease)='$yearsrelease' AND MONTH(daterelease)='$monthrelease'");
	// $rowupdate = mysqli_num_rows($dataupdate);
	// while($row=mysqli_fetch_assoc($dataupdate)){
	// 		$datarow[] = $row;
	// 	}
	// for($i=0;$i<$rowupdate;$i++){
	// 	$id=$datarow[$i]['id'];
	// 	$query=mysqli_query($koneksi,"UPDATE report SET daterelease='$daterelease',daterequest='$daterequest',duedate='$duedate' where id='$id'");

	// }
	header("location:../../laporan.php");
	
?>