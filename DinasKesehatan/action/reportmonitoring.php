<?php 
	include '../koneksi.php';
	$id_user=$_SESSION['id'];
	date_default_timezone_set('Asia/Jakarta');
	$now=date('Y-m-d');
	$monthnow=date('m');
	$yearnow=date('Y');
    $queryreport=mysqli_query($koneksi,"SELECT * FROM report a where id_user='$id_user' AND child_id IS NOT NULL AND daterequest<='$now' AND duedate>='$now' AND status='Proses'");
    $numqueryreport=mysqli_num_rows($queryreport);
    while($rowreport=mysqli_fetch_assoc($queryreport)){
        $datareport[]=$rowreport;
    }

    
	for($x=0;$x<$numqueryreport;$x++){
        $dataquery=array();
        $idreport=$datareport[$x]['id'];
        $daterequest=date("d F Y",strtotime($datareport[$x]['daterequest']));
        $due=date("d F Y",strtotime($datareport[$x]['duedate']));
        $monthreport=date("F",strtotime($datareport[$x]['daterelease']));
        $yerareport=date("Y",strtotime($datareport[$x]['daterelease']));
        $duedateps=mysqli_query($koneksi,"SELECT b.duedate FROM report a, report b where b.child_id='$idreport' ");
        $dueps=mysqli_fetch_assoc($duedateps);
        $dueps=date("d F Y",strtotime($dueps['duedate']));
        $duedatefktp=mysqli_query($koneksi,"SELECT c.duedate FROM report a, report b,report c where b.child_id='$idreport' AND c.child_id=b.id ");
        $duefktp=mysqli_fetch_assoc($duedatefktp);
        $duefktp=date("d F Y",strtotime($duefktp['duedate']));
        
	$query=mysqli_query($koneksi,"SELECT b.*,c.name FROM report b,user c where b.child_id='$idreport' AND  c.id=b.id_user");
	$numrow=mysqli_num_rows($query);
	while($row=mysqli_fetch_assoc($query)){
		$dataquery[]=$row;
	}
    $statusdk=0;
    for($a=0;$a<$numrow;$a++){
        if ($dataquery[$a]['status']=="Proses") {
            $statusdk=$statusdk+1;
        }else{

        }
    }
        echo'<form id="tambahdata" method="POST" action="action/reportsubmit.php" '; if($datareport[$x]['status']=="Selesai"){echo 'hidden';}else{} echo'><div class="row pelaporan">
                <div class="col-lg-12">
                        <div class="card" >
                            <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12 text-left">
                                            <div class="form-tambah">
                                                <p class="form-tittle" style="text-indent:20px;"> Laporan Penyakit Tidak Menular - '.$monthreport.' '.$yerareport.' </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                       
                                        <div class="col-lg-6" style="border-right: 1px solid #e5e5e5;">
                                            <div class="row form-space">
                                                <div class="col-lg-4 text-left">
                                                    <div class="form-tambah">
                                                        <a >Kode Laporan</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 text-left">
                                                    <div class="form-tambah">
                                                        <a>:</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 text-left">
                                                     <input  type="text" id="" name="reportid" value="'.$datareport[$x]['id'].'" class="required form-control form-input" hidden>
                                                    <input  type="text" id="" name="" value="'.$datareport[$x]['kode'].'" class="required form-control form-input" readonly>  
                                                    
                                                </div>
                                            </div>
                                             <div class="row form-space">
                                                <div class="col-lg-4 text-left">
                                                    <div class="form-tambah">
                                                        <a >Status</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 text-left">
                                                    <div class="form-tambah">
                                                        <a>:</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 text-left">
                                                    
                                                    <input style="';if($statusdk>0){$statusdk='Menunggu '.$statusdk." Puskesmas"; echo'color:#eb5757!important;';}else{$statusdk="Selesai"; echo 'color:#03bbd3!important;';} echo'"  type="text" id="" name="" value="'.$statusdk.'" class="required form-control form-input" readonly>  
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                    
                                        <div class="col-lg-6">
                                             
                                             <div class="row form-space">
                                                <div class="col-lg-6 text-left">
                                                    <div class="form-tambah">
                                                        <a >Tanggal Mulai Pelaporan</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 text-left">
                                                    <div class="form-tambah">
                                                        <a>:</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 text-left">
                                                    
                                                    <input  type="text" id="" name="" value="'.$daterequest.'" class="required form-control form-input" readonly>  
                                                    
                                                </div>
                                            </div>
                                             <div class="row form-space">
                                                <div class="col-lg-6 text-left">
                                                    <div class="form-tambah">
                                                        <a >Batas Pelaporan FKTP</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 text-left">
                                                    <div class="form-tambah">
                                                        <a>:</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 text-left">
                                                    
                                                    <input  type="text" id="" name="" value="'.$duefktp.'" class="required form-control form-input" readonly>  
                                                    
                                                </div>
                                            </div>
                                             <div class="row form-space">
                                                <div class="col-lg-6 text-left">
                                                    <div class="form-tambah">
                                                        <a >Batas Pelaporan Puskesmas</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 text-left">
                                                    <div class="form-tambah">
                                                        <a>:</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 text-left">
                                                    
                                                    <input  type="text" id="" name="" value="'.$dueps.'" class="required form-control form-input" readonly>  
                                                    
                                                </div>
                                            </div>
                                             <div class="row form-space">
                                                <div class="col-lg-6 text-left">
                                                    <div class="form-tambah">
                                                        <a >Batas Pelaporan Bulanan</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 text-left">
                                                    <div class="form-tambah">
                                                        <a>:</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 text-left">
                                                    
                                                    <input  type="text" id="" name="" value="'.$due.'" class="required form-control form-input" readonly>  
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                      
                                
                                <div class="row" style="margin-top:30px;">
                                    <div class="col">
                                        <div id="accordion" role="tablist" aria-multiselectable="true">';
    $allow=0;
	for($i=0;$i<$numrow;$i++){
		$idparent=$dataquery[$i]['id'];
		$querychild=mysqli_query($koneksi,"SELECT a.*,b.name,b.last_login from report a,user b WHERE a.child_id='$idparent' AND b.id=a.id_user");
		$numrowchild=mysqli_num_rows($querychild);
		$datachild=array();
		while($rowchild=mysqli_fetch_assoc($querychild)){
				$datachild[]=$rowchild;
		}
        if($dataquery[$i]['status']=="Proses"){
           $allow=$allow+1;
        }else{
         
            }

		echo '<a data-toggle="collapse" href="#collapse'.$dataquery[$i]['id'].'" aria-expanded="true" aria-controls="collapseOne">
                                                <div style="';if($dataquery[$i]['status']=="Proses"){echo 'background-color:#8c8e8d!important;';}else{} echo'"class="card-header" role="tab" id="headingOne">
                                                    <div class="row">
                                                        <div class="col-lg-6 text-left">
                                                            <h5 class="mb-0">'.$dataquery[$i]['name'].'</h5>
                                                        </div>
                                                        <div class="col-lg-6 text-right">
                                                            <h5 class="mb-0">'.$dataquery[$i]['status'].'</h5>
                                                        </div>
                                                   
                                                    </div>
                                                </div>
                                                </a>
                                                
                                                <div id="collapse'.$dataquery[$i]['id'].'" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                                    <div class="card-block">
                                                    
                                                        <div class="table-responsive">
                                                            <table id="bootstrap-data-table"  class="table table-striped table-bordered">
                                                                <thead class="thead-default">
                                                                    <tr>
                                                                        <th>Nama Organisasi</th>
                                                                        <th>Akses Terakhir</th>
                                                                        <th>Tanggal Pelaporan</th>
                                                                        <th>Jumlah Skrining</th>
                                                                        <th>Status Pelaporan</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                ';
                                                                    
                                                                 $sumpus=0;
                                                                 for($j=0;$j<$numrowchild;$j++){
                                                                    
                                                                    $reportkode=$datachild[$j]['id'];
                                                                    if($datachild[$j]['last_login']=="0000-00-00"){
                                                                        $last="-";
                                                                    }else{
                                                                        $last=date("d F Y",strtotime($datachild[$j]['last_login']));
                                                                    }
                                                                    $sumskrining=mysqli_query($koneksi,"SELECT id FROM datareport WHERE report_id='$reportkode'");
                                                                    $sumsskrining=mysqli_num_rows($sumskrining);
                                                                   
                                                                    if($sumsskrining==0){
                                                                        $sumsskrining="-";
                                                                    }else{
                                                                        $sumpus=$sumpus+$sumsskrining;
                                                                        $sumsskrining=$sumsskrining.' Orang';
                                                                        
                                                                    }

                                                                    if($datachild[$j]['datecomplete']=="0000-00-00"){
                                                                        $datachild[$j]['datecomplete']="-";
                                                                    }else{
                                                                        $datachild[$j]['datecomplete']=date("d F Y",strtotime($datachild[$j]['datecomplete']));
                                                                    }
                                                                    
                                                                 echo '
                                                                    <tr>
                                                                        <td>'.$datachild[$j]['name'].'</td>
                                                                        <td>'.$last.'</td>
                                                                        <td>'.$datachild[$j]['datecomplete'].'</td>
                                                                        <td>'.$sumsskrining.'</td>
                                                                        <td style="font-weight:800;'; if($datachild[$j]['status']=="Proses"){echo 'color:#eb5757;';}else if($datachild[$j]['status']=="Selesai"){echo 'color:#03bbd3;';}else{echo'color:#8c8e8d;';}echo'">'.$datachild[$j]['status'].'</td>
                                                                        
                                                                    </tr>
                                                                ';}
                                                                if($sumpus==0){
                                                                    $sumpus="-";
                                                                }else{
                                                                    $sumpus=$sumpus." Orang";
                                                                }
                                                                echo '
                                                                    <tr>
                                                                        <td style="background-color:#fff;border:0px;"></td>
                                                                        <td style="background-color:#fff;border:0px;"></td>
                                                                        <td>Total</td>
                                                                        <td>'.$sumpus.'</td>
                                                                        <td style="font-weight:800;'; if($dataquery[$i]['status']=="Proses"){echo 'color:#eb5757;';}else{echo 'color:#03bbd3;';}echo'">'.$dataquery[$i]['status'].'</td>
                                                                        
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>';
	}
    echo '              
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="modal-footer">
                                ';if($allow==0){ echo'
                                    <input  type="submit" value="Selesai" class="btn btn-success">';
                                }else{ echo'
                                    <a id="deletedata">
                                    <input  type="" value="Menunggu ('.$allow.')" class="btn btn-danger" readonly >
                                    <a>';
                                    }
                                echo'
                                </div>
                        </div>
                     
                </div><!-- /# column -->
            </div>
            </form>';
}
?>