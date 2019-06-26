<?php 
	session_start();
        include '../../koneksi.php';
        date_default_timezone_set('Asia/Jakarta');
        $now=date('Y-m-d');
        $monthnow=date('m');
        $yearnow=date('y');
        $child_id=$_SESSION['id'];
        $name = $_POST['nama'];
        $person = $_POST['pj'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $role_id="4";//buat input drop down;
        $email = $_POST['email'];
        $area = $_POST['area'];
        $phonenumber = $_POST['telepon'];
        $address = $_POST['alamat'];
        $datareport=array();

        // include database connection file
        

        // Insert user data into table
        $query = mysqli_query($koneksi, "INSERT INTO user(id,role_id,child_id,name,person,username,password,email,area,phonenumber,address) VALUES(null,$role_id,$child_id,'$name','$person','$username','$password','$email','$area','$phonenumber','$address')");

        $childvalidreport=mysqli_query($koneksi,"SELECT MAX(id) FROM user WHERE role_id='$role_id' AND child_id='$child_id'");
        $datachild=mysqli_fetch_assoc($childvalidreport);
        $idnewchild=$datachild['MAX(id)'];
         $updatereport=mysqli_query($koneksi,"SELECT b.* FROM report a,report b WHERE a.id_user='$child_id' AND a.child_id IS NOT NULL AND b.child_id=a.id AND b.daterequest>='now' ");

        $datareport[]=mysqli_fetch_assoc($updatereport);
        $datereleasechildreport=$datareport[0]['daterelease'];
        $datarequestchildreport=$datareport[0]['daterequest'];
        $dataduedatepsreport=$datareport[0]['duedate'];
        $monthchildreport=date("m",strtotime($datareport[0]['daterelease']));
        $yearchildreport=date("y",strtotime($datareport[0]['daterelease']));
        $kodechildreport="PTMFK".$idnewchild."".$monthchildreport."".$yearchildreport;
        $datastatus="Proses";
        $datachild_id=$datareport[0]['child_id'];
        $queryinsert=mysqli_query($koneksi,"INSERT INTO report(id,id_user,child_id,kode,daterelease,daterequest,duedate,status)VALUES(null,'$idnewchild','$datachild_id','$kodechildreport','$datereleasechildreport','$datarequestchildreport','$dataduedatepsreport','$datastatus')");
        

        // Show message when user added
        
        header("location:../fktp.php");

?>