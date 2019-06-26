<?php
include '../koneksi.php';
    $user_id=$_SESSION['id'];
    $parentid=mysqli_query($koneksi,"SELECT c.id FROM user a,user b,user c WHERE a.id='$user_id' AND b.id=a.child_id AND c.id=b.child_id");
	while($rowparent=mysqli_fetch_assoc($parentid)){
        $dataparent[] = $rowparent;
    }
    $user_id=$dataparent[0]['id'];
	$data=array();
	$result = mysqli_query($koneksi,"SELECT b.id,a.name,b.id_user,b.kode,b.daterelease,b.datecomplete,b.daterequest,b.duedate,b.status FROM user a, report b  where b.id_user='$user_id' AND b.child_id IS NOT null AND b.id_user=a.id ");
	$rowresult = mysqli_num_rows($result);
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_assoc($result)){
			$data[] = $row;
		}
	}
	function bulan($tanggal)
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
   
     for ($i = 0; $i < $rowresult; $i++){ 
                    $childps=$data[$i]['id'];
                    $psduedate=mysqli_query($koneksi,"SELECT duedate FROM report WHERE child_id='$childps' ");
                    $psdue=mysqli_fetch_assoc($psduedate);
                    $psdue=date("d F Y",strtotime($psdue['duedate']));
                    $fkduedate=mysqli_query($koneksi,"SELECT b.duedate FROM report a,report b WHERE a.child_id='$childps' AND b.child_id=a.id ");
                    $fkdue=mysqli_fetch_assoc($fkduedate);
                    $fkdue=date("d F Y",strtotime($fkdue['duedate']));
                    $month=bulan($data[$i]['daterelease']);
                    $duedate=date("d F Y",strtotime($data[$i]['duedate']));
                    $daterequest=date("d F Y",strtotime($data[$i]['daterequest']));
                    $years=date("Y",strtotime($data[$i]['daterelease']));
                    echo '[ "'.$data[$i]['id'].'","'.$data[$i]['id_user'].'","'.$data[$i]['name'].'","'.$data[$i]['kode'].'","'.$month.'","'.$years.'","'.$daterequest.'","'.$fkdue.'","'.$psdue.'","'.$duedate.'","'.$data[$i]['status'].'","'.$data[$i]['datecomplete'].'","'.$data[$i]['daterelease'].'"],';
                    } 

 ?>