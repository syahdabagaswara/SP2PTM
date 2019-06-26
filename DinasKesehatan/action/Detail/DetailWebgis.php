<?php
include '../../../koneksi.php';
$queryDisease=mysqli_query($koneksi,"SELECT * FROM disease");
$numsdisease=mysqli_num_rows($queryDisease);
while($rowd=mysqli_fetch_assoc($queryDisease)){
    $datad[]=$rowd;
}
$data=array();
for($i=0;$i<$numsdisease;$i++){
    $iddisease=$datad[$i]['id'];
    $namedisease=$datad[$i]['name'];
    $querydata=mysqli_query($koneksi,"SELECT c.area,( SELECT COUNT(x.id) FROM datareport x ) AS yuhu FROM datareport a, report b, user c WHERE b.id_user=c.id AND a.report_id=b.id  GROUP BY c.area");
        while($row=mysqli_fetch_assoc($querydata)){
            $data[]=$row;
        }
    
}
// $querydata=mysqli_query($koneksi,"SELECT a.area AS AREA $select FROM user a");
// while($row=mysqli_fetch_assoc($querydata)){
//     $data[]=$row;
// }
// $dataqgis=array();
// $dataqgis[0]['fuck']="lala";
print_r(json_encode($data));
?>