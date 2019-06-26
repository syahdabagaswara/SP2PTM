<?php
include '../koneksi.php';
	$user_id=$_SESSION['id'];
	$data=array();
	$result = mysqli_query($koneksi,"SELECT b.id,a.name,b.id_user,b.kode,b.daterelease,b.datecomplete,b.daterequest,b.duedate,b.status from user a, report b where a.id = '$user_id' AND b.child_id IS NOT NULL AND b.id_user=a.id AND b.status='Selesai' ");
	$rowresult = mysqli_num_rows($result);
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_assoc($result)){
			$data[] = $row;
		}
	}
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
     for ($i = 0; $i < $rowresult; $i++){  
                    $month=tanggal_indo($data[$i]['daterelease']);
                    $years=date("Y",strtotime($data[$i]['daterelease']));
                    echo '[ "'.$data[$i]['id'].'","'.$data[$i]['id_user'].'","'.$data[$i]['kode'].'","'.$data[$i]['name'].'","'.$month.'","'.$years.'","'.$data[$i]['daterequest'].'","'.$data[$i]['duedate'].'","'.$data[$i]['status'].'","'.$data[$i]['datecomplete'].'"],';
                    } 
?>