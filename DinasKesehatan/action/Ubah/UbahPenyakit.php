<?php
	session_start();
    include '../../../koneksi.php';
    $id=$_POST['ubahid'];
    $kode=$_POST['ubahicdx'];
    $name=$_POST['ubahpenyakit'];
    $querycheck=mysqli_query($koneksi,"SELECT * FROM disease WHERE id !='$id'");
    $querynumcheck=mysqli_num_rows($querycheck);
    while ($rowcheck=mysqli_fetch_assoc($querycheck)) {
    	$datacheck[]=$rowcheck;
    }
    for($i=0;$i<$querynumcheck;$i++){
    	if($datacheck[$i]['icd_x']==$kode){
    		header("location:../../penyakit.php?data=null");
			close();
    	}elseif($datacheck[$i]['name']==$name){
    		header("location:../../penyakit.php?data=null");
			close();
    	}else{

    	}
    } 
    $query=mysqli_query($koneksi,"UPDATE disease SET icd_x='$kode',name='$name' WHERE id='$id' ");
    header("location:../../penyakit.php");

?>