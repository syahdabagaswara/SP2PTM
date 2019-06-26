<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
date_default_timezone_set('Asia/Jakarta');
$now=date('Y-m-d');
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
$lastlogin = mysqli_query($koneksi,"UPDATE user SET last_login='$now' where id=''");

// menghitung jumlah data yang ditemukan
$check = mysqli_num_rows($login);

 
// cek apakah username dan password di temukan pada database
if($check > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['role_id']=="2"){
 
		// buat session login dan username
		$_SESSION['id']=$data['id'];
		$_SESSION['wilayah']=$data['area'];
		$_SESSION['nama'] = $data['name'];
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "Admin";
		$id=$data['id'];
		$lastlogin = mysqli_query($koneksi,"UPDATE user SET last_login='$now' where id='$id'");
		// alihkan ke halaman dashboard admin
		//    $msg="Login Berhasil";
           
            

        //     //kalau berhasil maka keluar alert yang berisi menambahkan data
            
        //     echo "<script type='text/javascript'>alert('$msg');</script>";
            
            
            
              
		header("location:DinasKesehatan/index.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['role_id']=="3"){
		// buat session login dan username
		$_SESSION['id']=$data['id'];
		$_SESSION['wilayah']=$data['area'];
		$_SESSION['nama'] = $data['name'];
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "Puskesmas";
		$id=$data['id'];
		$lastlogin = mysqli_query($koneksi,"UPDATE user SET last_login='$now' where id='$id'");
		// alihkan ke halaman dashboard pegawai
		header("location:Puskesmas/index.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['role_id']!="2" || $data['role_id']!="3" ){
		// buat session login dan username
		$_SESSION['id']=$data['id'];
		$_SESSION['wilayah']=$data['area'];
		$_SESSION['nama'] = $data['name'];
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "FKTP";
		$id=$data['id'];
		$lastlogin = mysqli_query($koneksi,"UPDATE user SET last_login='$now' where id='$id'");
		// alihkan ke halaman dashboard pegawai
		header("location:FKTP/index.php");
 
	// cek jika user login sebagai pegawai
	}else{
 
		// alihkan ke halaman login kembali
		header("location:index.php?auth=error");
	}	
}else{
	header("location:index.php?auth=error");
}
 
?>