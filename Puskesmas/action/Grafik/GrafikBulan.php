<?php
include '../../../koneksi.php';
date_default_timezone_set('Asia/Jakarta');
$yearnow=date('Y');
$query=mysqli_query($koneksi,"SELECT MONTH(visitdate) AS mon,COUNT(id) AS sum FROM datareport WHERE YEAR(visitdate)=$yearnow GROUP BY MONTH(visitdate)");
$nums=mysqli_num_rows($query);
while($row=mysqli_fetch_assoc($query)){
    $data[]=$row;
}
$num=12;
$a=array();
$bulan = array (0 =>   'Januari',
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

    for($i=0;$i<$num;$i++){
        $a[$i]['id']=$i;
        $a[$i]['mon']=$bulan[$i];
        $a[$i]['sums']=0;
        for($j=0;$j<$nums;$j++){
            if(($data[$j]['mon']-1)==$a[$i]['id']){
                $a[$i]['sums']=$data[$j]['sum'];
            }
        
    }
}

   
print_r(json_encode($a));
?>
