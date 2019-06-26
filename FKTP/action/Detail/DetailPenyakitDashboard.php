<?php
// include '../../../koneksi.php';
$yearnow=date('Y');
$yearold=$yearnow-1;

$query=mysqli_query($koneksi,"SELECT a.name as 'penyakit',
(SELECT COUNT(id) FROM datareport b WHERE b.disease_id = a.id AND YEAR(b.visitdate)='$yearold') AS 'totalold',
(SELECT COUNT(id) FROM datareport b WHERE b.disease_id = a.id AND YEAR(b.visitdate)='$yearnow') AS 'totalnew'
FROM disease a GROUP BY a.name");
$datalabel=array();
$numslabel=mysqli_num_rows($query);
while($row=mysqli_fetch_assoc($query)){
    $datalabel[]=$row;
}


    


?>