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
	$filterarea=" FROM user c, patient b WHERE c.id='$user_id' AND b.user_id=c.id AND ";  
}else{
	$bur=$_GET['bur']; 
	$filterarea="FROM user c, patient b WHERE c.id='$user_id' AND b.user_id=c.id AND"; 
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
$datalabelchart[0]['label']="15 AND 19";
$datalabelchart[1]['label']="20 AND 44";
$datalabelchart[2]['label']="45 AND 54";
$datalabelchart[3]['label']="55 AND 59";
$datalabelchart[4]['label']="60 AND 69";
$datalabelchart[5]['label']="70 AND 150";

$nums=count($datalabelchart);

for($i=0;$i<$nums;$i++){
    $agerange=$datalabelchart[$i]['label'];
    $querymen=mysqli_query($koneksi,"SELECT COUNT(b.id) AS L $filterarea b.gender='Laki-Laki' AND b.age BETWEEN $agerange $filtermonth $filteryear");
    $men=mysqli_fetch_assoc($querymen);
    $datalabelchart[$i]['laki']=$men['L'];

    $querygirl=mysqli_query($koneksi,"SELECT COUNT(b.id) AS P $filterarea b.gender='Perempuan' AND b.age BETWEEN $agerange $filtermonth $filteryear");
    $girl=mysqli_fetch_assoc($querygirl);
    $datalabelchart[$i]['perempuan']=$girl['P'];

    $querynew=mysqli_query($koneksi,"SELECT COUNT(b.id) AS Baru $filterarea b.status='Baru' AND b.age BETWEEN $agerange $filtermonth $filteryear");
    $new=mysqli_fetch_assoc($querynew);
    $datalabelchart[$i]['baru']=$new['Baru'];

    $queryold=mysqli_query($koneksi,"SELECT COUNT(b.id) AS Lama $filterarea b.status='Lama' AND b.age BETWEEN $agerange $filtermonth $filteryear");
    $old=mysqli_fetch_assoc($queryold);
    $datalabelchart[$i]['lama']=$old['Lama'];

    $querysum=mysqli_query($koneksi,"SELECT COUNT(b.id) AS sum $filterarea b.age BETWEEN $agerange $filtermonth $filteryear");
    $sum=mysqli_fetch_assoc($querysum);
    $datalabelchart[$i]['total']=$sum['sum'];
}
$datalabelchart[0]['label']="15 - 19 Tahun";
$datalabelchart[1]['label']="20 - 44 Tahun";
$datalabelchart[2]['label']="45 - 54 Tahun";
$datalabelchart[3]['label']="55 - 59 Tahun";
$datalabelchart[4]['label']="60 - 69 Tahun";
$datalabelchart[5]['label']="Lebih dari 70 Tahun";
 
//  $querylabelchart=mysqli_query($koneksi,"SELECT t.age AS umur, count(*) AS total FROM 
// (SELECT id, 
//  CASE
//     WHEN age BETWEEN 15 AND 19 THEN '15-19' 
//     WHEN age BETWEEN 20 AND 44 THEN '20-44'
//     WHEN age BETWEEN 45 AND 54 THEN '45-54'
//     WHEN age BETWEEN 55 AND 59 THEN '55-58'
//     WHEN age BETWEEN 60 AND 69 THEN '60-69'
//     WHEN age >= 70 THEN '>70'
//     ELSE 'dibawah 15 tahun' END AS age 
//  FROM datareport) 
//  t GROUP BY t.age");
//  		$datalabelchart=array();
//         $numslabelchart=mysqli_num_rows($querylabelchart);
//         while($rowchart=mysqli_fetch_assoc($querylabelchart)){
//             $datalabelchart[]=$rowchart;
//         }
        
    
       

  print_r(json_encode($datalabelchart));
// print_r($datalabelchart);

    
   ?>