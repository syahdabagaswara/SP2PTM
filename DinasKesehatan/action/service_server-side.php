<?php
session_start();
include '../../koneksi.php';
$id=$_SESSION['id'];
$table = 'role';
$primaryKey = 'id';

 
$columns = array(
    array( 'db' => 'id', 'dt' => 0 ),
    array( 'db' => 'role','dt' => 1 ),
);
 
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'sp2ptm',
    'host' => '127.0.0.1'
);

require('ssp.class.php');
 
echo json_encode(
    SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns,null,"id NOT IN(1,2)")
);

?>