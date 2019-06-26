<?php 
include '../../../koneksi.php';
 function get_string_between($string, $start, $end){
        $string = ' ' . $string;
        $ini = strpos($string, $start);
        if ($ini == 0) return '';
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;
        return substr($string, $ini, $len);
    }
if(empty($_GET['code'])) {
	 
}else{
	$code=$_GET['code']; 
	
}
$datalabelchart=array();
 
 $querylabelchart=mysqli_query($koneksi,"SELECT a.icd_x,a.name as 'dis',
(SELECT COUNT(b.id) FROM report e,report d,report c,datareport b WHERE e.child_id='$code' AND d.child_id=e.id AND c.child_id=d.id AND b.report_id=c.id AND b.disease_id = a.id AND b.status='Baru' AND b.gender='Laki-Laki' AND (b.age BETWEEN 15 AND 19)) AS 'BL1519',
(SELECT COUNT(b.id) FROM report e,report d,report c,datareport b WHERE e.child_id='$code' AND d.child_id=e.id AND c.child_id=d.id AND b.report_id=c.id AND b.disease_id = a.id AND b.status='Baru' AND b.gender='Perempuan' AND (b.age BETWEEN 15 AND 19)) AS 'BP1519',
(SELECT COUNT(b.id) FROM report e,report d,report c,datareport b WHERE e.child_id='$code' AND d.child_id=e.id AND c.child_id=d.id AND b.report_id=c.id AND b.disease_id = a.id AND b.status='Lama' AND b.gender='Laki-Laki' AND (b.age BETWEEN 15 AND 19)) AS 'LL1519',
(SELECT COUNT(b.id) FROM report e,report d,report c,datareport b WHERE e.child_id='$code' AND d.child_id=e.id AND c.child_id=d.id AND b.report_id=c.id AND b.disease_id = a.id AND b.status='Lama' AND b.gender='Perempuan' AND (b.age BETWEEN 15 AND 19)) AS 'LP1519',
(SELECT COUNT(b.id) FROM report e,report d,report c,datareport b WHERE e.child_id='$code' AND d.child_id=e.id AND c.child_id=d.id AND b.report_id=c.id AND b.disease_id = a.id AND b.status='Baru' AND b.gender='Laki-Laki' AND (b.age BETWEEN 20 AND 44)) AS 'BL2044',
(SELECT COUNT(b.id) FROM report e,report d,report c,datareport b WHERE e.child_id='$code' AND d.child_id=e.id AND c.child_id=d.id AND b.report_id=c.id AND b.disease_id = a.id AND b.status='Baru' AND b.gender='Perempuan' AND (b.age BETWEEN 20 AND 44)) AS 'BP2044',
(SELECT COUNT(b.id) FROM report e,report d,report c,datareport b WHERE e.child_id='$code' AND d.child_id=e.id AND c.child_id=d.id AND b.report_id=c.id AND b.disease_id = a.id AND b.status='Lama' AND b.gender='Laki-Laki' AND (b.age BETWEEN 20 AND 44)) AS 'LL2044',
(SELECT COUNT(b.id) FROM report e,report d,report c,datareport b WHERE e.child_id='$code' AND d.child_id=e.id AND c.child_id=d.id AND b.report_id=c.id AND b.disease_id = a.id AND b.status='Lama' AND b.gender='Perempuan' AND (b.age BETWEEN 20 AND 44)) AS 'LP2044',
(SELECT COUNT(b.id) FROM report e,report d,report c,datareport b WHERE e.child_id='$code' AND d.child_id=e.id AND c.child_id=d.id AND b.report_id=c.id AND b.disease_id = a.id AND b.status='Baru' AND b.gender='Laki-Laki' AND (b.age BETWEEN 45 AND 54)) AS 'BL4554',
(SELECT COUNT(b.id) FROM report e,report d,report c,datareport b WHERE e.child_id='$code' AND d.child_id=e.id AND c.child_id=d.id AND b.report_id=c.id AND b.disease_id = a.id AND b.status='Baru' AND b.gender='Perempuan' AND (b.age BETWEEN 45 AND 54)) AS 'BP4554',
(SELECT COUNT(b.id) FROM report e,report d,report c,datareport b WHERE e.child_id='$code' AND d.child_id=e.id AND c.child_id=d.id AND b.report_id=c.id AND b.disease_id = a.id AND b.status='Lama' AND b.gender='Laki-Laki' AND (b.age BETWEEN 45 AND 54)) AS 'LL4554',
(SELECT COUNT(b.id) FROM report e,report d,report c,datareport b WHERE e.child_id='$code' AND d.child_id=e.id AND c.child_id=d.id AND b.report_id=c.id AND b.disease_id = a.id AND b.status='Lama' AND b.gender='Perempuan' AND (b.age BETWEEN 45 AND 54)) AS 'LP4554',
(SELECT COUNT(b.id) FROM report e,report d,report c,datareport b WHERE e.child_id='$code' AND d.child_id=e.id AND c.child_id=d.id AND b.report_id=c.id AND b.disease_id = a.id AND b.status='Baru' AND b.gender='Laki-Laki' AND (b.age BETWEEN 55 AND 58)) AS 'BL5558',
(SELECT COUNT(b.id) FROM report e,report d,report c,datareport b WHERE e.child_id='$code' AND d.child_id=e.id AND c.child_id=d.id AND b.report_id=c.id AND b.disease_id = a.id AND b.status='Baru' AND b.gender='Perempuan' AND (b.age BETWEEN 55 AND 58)) AS 'BP5558',
(SELECT COUNT(b.id) FROM report e,report d,report c,datareport b WHERE e.child_id='$code' AND d.child_id=e.id AND c.child_id=d.id AND b.report_id=c.id AND b.disease_id = a.id AND b.status='Lama' AND b.gender='Laki-Laki' AND (b.age BETWEEN 55 AND 58)) AS 'LL5558',
(SELECT COUNT(b.id) FROM report e,report d,report c,datareport b WHERE e.child_id='$code' AND d.child_id=e.id AND c.child_id=d.id AND b.report_id=c.id AND b.disease_id = a.id AND b.status='Lama' AND b.gender='Perempuan' AND (b.age BETWEEN 55 AND 58)) AS 'LP5558',
(SELECT COUNT(b.id) FROM report e,report d,report c,datareport b WHERE e.child_id='$code' AND d.child_id=e.id AND c.child_id=d.id AND b.report_id=c.id AND b.disease_id = a.id AND b.status='Baru' AND b.gender='Laki-Laki' AND (b.age BETWEEN 60 AND 69)) AS 'BL6069',
(SELECT COUNT(b.id) FROM report e,report d,report c,datareport b WHERE e.child_id='$code' AND d.child_id=e.id AND c.child_id=d.id AND b.report_id=c.id AND b.disease_id = a.id AND b.status='Baru' AND b.gender='Perempuan' AND (b.age BETWEEN 60 AND 69)) AS 'BP6069',
(SELECT COUNT(b.id) FROM report e,report d,report c,datareport b WHERE e.child_id='$code' AND d.child_id=e.id AND c.child_id=d.id AND b.report_id=c.id AND b.disease_id = a.id AND b.status='Lama' AND b.gender='Laki-Laki' AND (b.age BETWEEN 60 AND 69)) AS 'LL6069',
(SELECT COUNT(b.id) FROM report e,report d,report c,datareport b WHERE e.child_id='$code' AND d.child_id=e.id AND c.child_id=d.id AND b.report_id=c.id AND b.disease_id = a.id AND b.status='Lama' AND b.gender='Perempuan' AND (b.age BETWEEN 60 AND 69)) AS 'LP6069',
(SELECT COUNT(b.id) FROM report e,report d,report c,datareport b WHERE e.child_id='$code' AND d.child_id=e.id AND c.child_id=d.id AND b.report_id=c.id AND b.disease_id = a.id AND b.status='Baru' AND b.gender='Laki-Laki' AND b.age >=70) AS 'BLU70',
(SELECT COUNT(b.id) FROM report e,report d,report c,datareport b WHERE e.child_id='$code' AND d.child_id=e.id AND c.child_id=d.id AND b.report_id=c.id AND b.disease_id = a.id AND b.status='Baru' AND b.gender='Perempuan' AND b.age >=70) AS 'BPU70',
(SELECT COUNT(b.id) FROM report e,report d,report c,datareport b WHERE e.child_id='$code' AND d.child_id=e.id AND c.child_id=d.id AND b.report_id=c.id AND b.disease_id = a.id AND b.status='Lama' AND b.gender='Laki-Laki' AND b.age >=70) AS 'LLU70',
(SELECT COUNT(b.id) FROM report e,report d,report c,datareport b WHERE e.child_id='$code' AND d.child_id=e.id AND c.child_id=d.id AND b.report_id=c.id AND b.disease_id = a.id AND b.status='Lama' AND b.gender='Perempuan' AND b.age >=70) AS 'LPU70',
(SELECT COUNT(b.id) FROM report e,report d,report c,datareport b WHERE e.child_id='$code' AND d.child_id=e.id AND c.child_id=d.id AND b.report_id=c.id AND b.disease_id = a.id AND b.status='Baru' AND b.gender='Laki-Laki' ) AS 'TBL',
(SELECT COUNT(b.id) FROM report e,report d,report c,datareport b WHERE e.child_id='$code' AND d.child_id=e.id AND c.child_id=d.id AND b.report_id=c.id AND b.disease_id = a.id AND b.status='Baru' AND b.gender='Perempuan' ) AS 'TBP',
(SELECT COUNT(b.id) FROM report e,report d,report c,datareport b WHERE e.child_id='$code' AND d.child_id=e.id AND c.child_id=d.id AND b.report_id=c.id AND b.disease_id = a.id AND b.status='Lama' AND b.gender='Laki-Laki' ) AS 'TLL',
(SELECT COUNT(b.id) FROM report e,report d,report c,datareport b WHERE e.child_id='$code' AND d.child_id=e.id AND c.child_id=d.id AND b.report_id=c.id AND b.disease_id = a.id AND b.status='Lama' AND b.gender='Perempuan' ) AS 'TLP'
FROM disease a GROUP BY a.name");
 		$datalabelchart=array();
        $numslabelchart=mysqli_num_rows($querylabelchart);
        while($rowchart=mysqli_fetch_assoc($querylabelchart)){
            $datalabelchart[]=$rowchart;
        }
        for($i=0;$i<$numslabelchart;$i++){
        	if(strlen($datalabelchart[$i]['dis'])>19){
                $parsed = get_string_between($datalabelchart[$i]['dis'], '(', ')');
                $datalabelchart[$i]['dis']=$parsed;
        	}
        }
        for($i=0;$i<$numslabelchart;$i++){
        	
                $datalabelchart[$i]['nomor']=$i+1;
        
        }
       
    
       

  print_r(json_encode($datalabelchart));

    
   ?>