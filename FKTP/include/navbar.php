<?php 
    session_start();
 
    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['level']!="FKTP"){
        header("location:../index.php");
    }
 ?>
<?php
ob_start();
    include '../koneksi.php';
    $id_user=$_SESSION['id'];
    // date_default_timezone_set('Asia/Jakarta');
    $now=date('Y-m-d');
    $monthnow=date('m');
    $yearnow=date('Y');
    $yearreport=mysqli_query($koneksi,"SELECT id,daterelease FROM report WHERE child_id IS NULL AND status ='Proses'");
    $yearnum=mysqli_num_rows($yearreport);
    while($yearexpire=mysqli_fetch_assoc($yearreport)){
        $datayear[]=$yearexpire;
    }
    for($y=0;$y<$yearnum;$y++){
        $exyear=date("Y",strtotime($datayear[$y]['daterelease']));
        $exid=$datayear[$y]['id'];
        if($exyear<$yearnow){
            $queryyearcomplete=mysqli_query($koneksi,"UPDATE report SET status='Selesai',datecomplete='$now' WHERE id='$exid'");
        }else{

        }
        $monthreport=mysqli_query($koneksi,"SELECT id,duedate FROM report WHERE child_id='$exid' AND status='Proses'");
        $monthnum=mysqli_num_rows($monthreport);
        $datamonth=array();
        while ($monthexpire=mysqli_fetch_assoc($monthreport)) {
            $datamonth[]=$monthexpire;
        }
        for($m=0;$m<$monthnum;$m++){
            $exmid=$datamonth[$y]['id'];
            if($datamonth[$y]['duedate']<$now){
                $querymonthcomplete=mysqli_query($koneksi,"UPDATE report SET status='Selesai',datecomplete='$now' WHERE id='$exmid'");
            }else{

            }
        }

    }
    $queryexpire=mysqli_query($koneksi,"SELECT * FROM report WHERE child_id IS NOT NULL AND status='Proses'");
    $numexpire=mysqli_num_rows($queryexpire);
    while($rowexpire=mysqli_fetch_assoc($queryexpire)){
        $reportexpire[]=$rowexpire;
    }

    for($e=0;$e<$numexpire;$e++){
        $idexpire=$reportexpire[$e]['id'];
        $statusexpire=$reportexpire[$e]['status'];
        if($reportexpire[$e]['duedate']<$now){
            $updateexpire=mysqli_query($koneksi,"UPDATE report SET status='Terlambat' WHERE id='$idexpire'");
        }else{

        }
    }
    $quer1=mysqli_query($koneksi,"SELECT * FROM report WHERE id_user='$id_user' AND status='Proses' AND daterequest<='$now' AND duedate>='$now' ");
    $numreportrow=mysqli_num_rows($quer1);
   
 echo ' <!-- Left Panel --> 
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default"> 
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                
                <ul class="nav navbar-nav">
                    <li >
                        <div ><a class="navbar-brand" href="./"><img src="../Assets/images/SP2PTM.svg" alt="Logo"></a></div> 
                    </li>

                    <li class="">
                        <a class=""  href="index.php"><img class="menu-icon" src="../Assets/icons/icon_dashboard.svg">Dashboard </a>
                    </li>
                    <li class="">
                        <a  class="" href="pasienptm.php"><img class="menu-icon" src="../Assets/icons/icon_pasien.svg">Data Pasien PTM </a>
                    </li>
                    <li class=" menu-item-has-children dropdown">
                        <a href="#" class=" dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="menu-icon" src="../Assets/icons/icon_laporan.svg">Laporan</a>
                        <ul class="sub-menu children dropdown-menu ">
                            <li><i class="fa fa-circle"></i><a href="laporan.php">Jadwal Pelaporan</a></li>
                            <li><i class="fa fa-circle"></i><a href="laporanbulan.php">Laporan Bulanan</a></li>
                        </ul>
                    </li>
                    <li class=" menu-item-has-children dropdown">
                        <a href="#" class=" dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="menu-icon" src="../Assets/icons/icon_grafik.svg">Grafik</a>
                        <ul class="sub-menu children dropdown-menu ">
                            <li><i class="fa fa-circle"></i><a href="grafikpenyakit.php">Penyakit</a></li>
                            <li><i class="fa fa-circle"></i><a href="grafikusia.php">Usia</a></li>
                        </ul>
                    </li>';

                    if($numreportrow>0){ echo'
                    <li class="" style="background-color:#eb5757;">
                        <a  class="text-center" href="monitoring.php">Waktu Pelaporan</a>
                    </li>';}else{

                    }
                    echo '
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel --> 
    <!-- Left Panel -->
    <!-- Right Panel --> 
    <div id="right-panel" class="right-panel">
    <!-- Header-->
    <header id="header" class="header">  
        <div class="top-right">
        </div>
        <div class="top-right"> 
            <div class="header-menu"> 
            <div class="header-left">
            ';
                $querynotif=mysqli_query($koneksi,"SELECT * FROM messages WHERE id_user='$id_user' AND status='belum'");
                $querynotifnum=mysqli_num_rows($querynotif);
                $num=$querynotifnum;
                echo '
                <div class="dropdown for-notification">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <i class="fa fa-bell"></i>
                    <span class="count ">'.$num.'</span>
                </button>
                <div class="dropdown-menu" aria-labelledby="notification">';
                while($rownotif=mysqli_fetch_assoc($querynotif)){
                    $notif[]=$rownotif;
                }
                for($n=0;$n<$querynotifnum;$n++){
                    echo'
                    <a class="dropdown-item media" onclick="updatenotif('.$notif[$n]['id'].');">
                        <i class="fa fa-circle"></i>
                        <p>'.$notif[$n]['messages'].' </p>
                        
                    </a>';
                }
                 echo'   
                </div>
                </div>
            </div>
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       
                    <img class="user-avatar" src="../Assets/icons/icon_menu.svg">
                    </a>
                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="#"><i class="fa fa-user"></i> Data Akun</a>

                        <a class="nav-link" href="../logout.php"><i class="fa fa-power-off"></i> Keluar</a>
                    </div>
                </div> 
            </div>  
        </div>
    </header><!-- /header -->
        <!-- Header-->';
?>