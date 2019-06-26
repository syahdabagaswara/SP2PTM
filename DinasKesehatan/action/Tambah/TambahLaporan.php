<?php
	session_start();
	include '../../../koneksi.php';
	$user_id = $_SESSION['id'];
	function tanggal_indo($tanggal)
                    {
                        $bulan = array (1 =>   'Januari',
                                    'Februari',
                                    'Maret',
                                    'April',
                                    'Mei',
                                    'Juni',
                                    'Juli',
                                    'Agustus',
                                    'September',
                                    'Oktober',
                                    'November',
                                    'Desember'
                                );
                        $split = explode('-', $tanggal);
                        return $bulan[ (int)$split[1] ];
    }
	$daterelease = date("Y-m-d",strtotime($_POST['periode']));
	$daterequest = date("Y-m-d",strtotime($_POST['tanggalmulai']));
	$duedatefktp = date("Y-m-d",strtotime($_POST['bataswaktufktp']));
	$duedateps = date("Y-m-d",strtotime($_POST['bataswaktups']));
	$duedate = date("Y-m-d",strtotime($_POST['bataswaktu']));
	$monthrelease=date("m",strtotime($daterelease));
	$month=date("F",strtotime($daterelease));
	$monthnotif=$month=tanggal_indo($daterelease);
	$yearsrelease=date("Y",strtotime($daterelease));
	$yearssrelease=date("y",strtotime($daterelease));
	$datenow=date('Y-m-d');
	$statusme="belum";
	
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
	$checkyearreport=mysqli_query($koneksi,"SELECT id,id_user,child_id FROM report WHERE YEAR(daterelease)='$yearsrelease' AND child_id IS NUll");
	$reportyearcheck=mysqli_num_rows($checkyearreport);
	$datareportyear=mysqli_fetch_assoc($checkyearreport);
	$idreportyears=$datareportyear['id'];

	$checkmonthreport=mysqli_query($koneksi,"SELECT id,id_user,child_id FROM report WHERE YEAR(daterelease)='$yearsrelease' AND MONTH(daterelease)='$monthrelease' AND child_id='$idreportyears' ");
	$reportmonthcheck=mysqli_num_rows($checkmonthreport);
	$datareportmonth=mysqli_fetch_assoc($checkmonthreport);
	$idreportmonth=$datareportmonth['id'];
	

	$checkchild=mysqli_query($koneksi,"SELECT id,name FROM user WHERE child_id='$user_id'");
	$rowchild = mysqli_num_rows($checkchild);
	while($row=mysqli_fetch_assoc($checkchild)){
			$datachild[] = $row;
		}
	
	if($reportyearcheck==0){
		$kodeyr="PTMDK".$user_id."00".$yearssrelease;
		$statusyr="Proses";
		$createyearsreport=mysqli_query($koneksi,"INSERT INTO report(id,id_user,child_id,kode,daterelease,daterequest,duedate,status) VALUES(null,'$user_id',null,'$kodeyr','$daterelease','$daterequest','$duedate','$statusyr')");
		$checkyearreport=mysqli_query($koneksi,"SELECT id,id_user,child_id FROM report WHERE YEAR(daterelease)='$yearsrelease' AND child_id IS NUll");
		$reportyearcheck=mysqli_num_rows($checkyearreport);
		$datareportyear=mysqli_fetch_assoc($checkyearreport);
		$idreportyears=$datareportyear['id'];
		
	}else{
		
	}

	if($reportmonthcheck==0){
		$monthchild_id=$datareportyear['id'];
		$kodemt="PTMDK".$user_id."".$monthrelease."".$yearssrelease;
		$statusmt="Proses";
		$createmonthreport=mysqli_query($koneksi,"INSERT INTO report(id,id_user,child_id,kode,daterelease,daterequest,duedate,status) VALUES(null,'$user_id','$monthchild_id','$kodemt','$daterelease','$daterequest','$duedate','$statusmt')");
		$messagesDK="Jadwal Pelaporan Bulan ".$monthnotif." Tahun ".$yearsrelease." Telah Dibuat";			
		$querymessages=mysqli_query($koneksi,"INSERT INTO messages(id,id_user,messages,date,status)VALUES(null,'$user_id','$messagesDK','$datenow','$statusme')");
		$checkmonthreport=mysqli_query($koneksi,"SELECT id,id_user,child_id FROM report WHERE YEAR(daterelease)='$yearsrelease' AND MONTH(daterelease)='$monthrelease' AND child_id='$idreportyears' ");
		$reportmonthcheck=mysqli_num_rows($checkmonthreport);
		$datareportmonth=mysqli_fetch_assoc($checkmonthreport);
		$idreportmonth=$datareportmonth['id'];
		for ($i = 0; $i < $rowchild; $i++){
			$id_user=$datachild[$i]['id'];
			$child_id=$idreportmonth;
			$kodeps="PTMPS".$id_user."".$monthrelease."".$yearssrelease;
			$status="Proses";
			$createreportpus=mysqli_query($koneksi,"INSERT INTO report(id,id_user,child_id,kode,daterelease,daterequest,duedate,status)VALUES(null,'$id_user','$child_id','$kodeps','$daterelease','$daterequest','$duedateps','$status')");
			$messagesPS="Jadwal Pelaporan Bulan ".$monthnotif." Tahun ".$yearsrelease." Telah Dibuat";
					
			$querymessages=mysqli_query($koneksi,"INSERT INTO messages(id,id_user,messages,date,status)VALUES(null,'$id_user','$messagesPS','$datenow','$statusme')");
			
		}
			$getdatachild=mysqli_query($koneksi,"SELECT b.id,b.id_user,b.child_id from user a,report b where a.child_id='$user_id' AND b.id_user=a.id AND YEAR(b.daterelease)='$yearsrelease' AND MONTH(b.daterelease)='$monthrelease'");
			$getrowchild = mysqli_num_rows($getdatachild);
			while($getrow=mysqli_fetch_assoc($getdatachild)){
				$datagetchild[] = $getrow;
			}

			for($i=0;$i<$getrowchild;$i++){
				$idchild=$datagetchild[$i]['id'];

				$user_idchild=$datagetchild[$i]['id_user'];
				$getuserchild=mysqli_query($koneksi,"SELECT id from user where child_id='$user_idchild'");
				$getuserrowchild=mysqli_num_rows($getuserchild);
				$datauserchild=array();
				while($childrow=mysqli_fetch_assoc($getuserchild)){
					$datauserchild[] = $childrow;
				}
				echo $getuserrowchild;
				echo " /";
				print_r($datauserchild);
				for($j=0;$j<$getuserrowchild;$j++){
					$user_id=$datauserchild[$j]['id'];
					$statusfk="Proses";
					$kodefk="PTMFK".$user_id."".$monthrelease."".$yearssrelease;
					$createfktpreport=mysqli_query($koneksi,"INSERT INTO report(id,id_user,child_id,kode,daterelease,daterequest,duedate,status)VALUES(null,'$user_id','$idchild','$kodefk','$daterelease','$daterequest','$duedatefktp','$statusfk')");
					$messagesFK="Jadwal Pelaporan Bulan ".$monthnotif." Tahun ".$yearsrelease." Telah Dibuat";
					
					$querymessages=mysqli_query($koneksi,"INSERT INTO messages(id,id_user,messages,date,status)VALUES(null,'$user_id','$messagesFK','$datenow','$statusme')");
				}

			}
	}else{
		header("location:../../laporan.php?data=duplicate&month=".$monthrelease);
		close();
		
	}
	
	


	
	header("location:../../laporan.php");
	
	
?>