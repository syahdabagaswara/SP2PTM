<?php 
session_start();
include '../../../koneksi.php';
 function get_string_between($string, $start, $end){
        $string = ' ' . $string;
        $ini = strpos($string, $start);
        if ($ini == 0) return '';
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;
        return substr($string, $ini, $len);
    }
$user_id=$_SESSION['id'];
if(empty($_GET['bur'])) {
	$filterarea="COUNT(b.id) FROM user c, patient b WHERE c.id='$user_id' AND b.user_id=c.id AND ";  
}else{
	$bur=$_GET['bur']; 
	$filterarea="COUNT(b.id) FROM user c, patient b WHERE c.id='$user_id' AND c.area='$bur' AND b.user_id=c.id AND"; 
}
if(empty($_GET['cur'])) {
	 $filtermonth="";
}else{
	$cur=$_GET['cur'];
	$filtermonth="AND MONTH(b.visitdate)='$cur'";   
}
if(empty($_GET['lur'])) {
	  $filteryear="";
}else{
	$lur=$_GET['lur'];
	$filteryear="AND YEAR(b.visitdate)='$lur'"; 
}

 
 $querylabelchart=mysqli_query($koneksi,"SELECT a.name as 'dis',
(SELECT $filterarea b.disease_id = a.id AND b.gender='Laki-Laki' $filtermonth $filteryear ) AS 'laki',
(SELECT $filterarea b.disease_id = a.id AND b.gender='Perempuan' $filtermonth $filteryear) AS 'perempuan',
(SELECT $filterarea b.disease_id = a.id AND b.status='Baru' $filtermonth $filteryear) AS 'baru',
(SELECT $filterarea b.disease_id = a.id AND b.status='Lama' $filtermonth $filteryear) AS 'lama',
(SELECT $filterarea b.disease_id = a.id $filtermonth $filteryear) AS 'total' 
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
    
       

  print_r(json_encode($datalabelchart));

    
   ?>