<?php
session_start();
include '../../koneksi.php';
$id=$_SESSION['id'];
$table = 'user';
$primaryKey = 'id';

 
$columns = array(
    array( 'db' => 'id', 'dt' => 0 ),
    array( 'db' => 'name','dt' => 1 ),
    array( 'db' => 'person','dt' => 2 ),
    array( 'db' => 'username','dt' => 3),
    array( 'db' => 'password','dt' => 4 ),
    array( 'db' => 'role_id', 'dt' => 5 ),
    array( 'db' => 'child_id', 'dt' => 6 ),
    array( 'db' => 'email', 'dt' => 7 ),
    array( 'db' => 'area', 'dt' => 8 ),
    array( 'db' => 'phonenumber', 'dt' => 9 ),
    array( 'db' => 'address', 'dt' => 10 ),
    
);
 
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'sp2ptm',
    'host' => '127.0.0.1'
);
$wilayah=$_SESSION['wilayah'];


require('ssp.class.php');
 
echo json_encode(
    SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns,null,"child_id='$id'")
);

?>