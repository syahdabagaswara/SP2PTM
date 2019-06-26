<?php
session_start();
include '../../koneksi.php';
$id=$_SESSION['id'];
$table = 'disease';
$primaryKey = 'id';

 
$columns = array(
    array( 'db' => 'id', 'dt' => 0 ),
    array( 'db' => 'icd_x','dt' => 1 ),
    array( 'db' => 'name','dt' => 2 ),
    
);
 
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'sp2ptm',
    'host' => '127.0.0.1'
);

require('ssp.class.php');
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns)
);

?>