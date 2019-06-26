<?php
	session_start();
    include '../../../koneksi.php';
    $kode=$_POST['icdx'];
    $name=$_POST['penyakit'];
    $querycheck=mysqli_query($koneksi,"SELECT * FROM disease ");
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
    $query=mysqli_query($koneksi,"INSERT INTO disease(id,icd_x,name)VALUES(null,'$kode','$name')");
    header("location:../../penyakit.php");
?>