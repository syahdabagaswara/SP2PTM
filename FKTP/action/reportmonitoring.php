<?php 
	include '../koneksi.php';
	$id_user=$_SESSION['id'];
	date_default_timezone_set('Asia/Jakarta');
	$now=date('Y-m-d');
	$monthnow=date('m');
	$yearnow=date('Y');
	 
	$query=mysqli_query($koneksi,"SELECT b.name,c.* FROM user a,user b,report c where a.id='$id_user' AND b.id=a.child_id AND c.daterequest<='$now' AND c.duedate>='$now' AND c.id_user=b.id AND c.status='Proses'");
	$numrow=mysqli_num_rows($query);
	while($row=mysqli_fetch_assoc($query)){
		$dataquery[]=$row;
	}
    

	for($i=0;$i<$numrow;$i++){
		$idparent=$dataquery[$i]['id'];
		$querychild=mysqli_query($koneksi,"SELECT a.*,b.name,b.last_login from report a,user b WHERE a.child_id='$idparent' AND b.id=a.id_user");
        $queryreport=mysqli_query($koneksi,"SELECT a.*,b.name,b.person from report a,user b WHERE a.id_user='$id_user' AND a.child_id='$idparent' AND b.id=a.id_user");
       
		$numrowchild=mysqli_num_rows($querychild);
		$datachild=array();
        $monthreport=date("F",strtotime($dataquery[$i]['daterelease']));
        $yerareport=date("Y",strtotime($dataquery[$i]['daterelease']));
        while($rowreport=mysqli_fetch_assoc($queryreport)){
            $datareport[]=$rowreport;
        }
		while($rowchild=mysqli_fetch_assoc($querychild)){
				$datachild[]=$rowchild;
		}
        $daterequest=date("d F Y",strtotime($datareport[$i]['daterequest']));
        $due=date("d F Y",strtotime($datareport[$i]['duedate']));
		echo '<form id="tambahdata" method="POST" action="action/reportsubmit.php" '; if($datareport[$i]['status']=="Selesai"){echo 'hidden';}else{} echo'><div class="row pelaporan">
                <div class="col-lg-12">
                        <div class="card" >
                            <div class="card-body">
                            <div class="">
                            <input  type="text" id="" name="reportid" value="'.$datareport[$i]['id'].'" class="required form-control form-input" hidden>
                            <input  type="text" id="" name="daterelease" value="'.$datareport[$i]['daterelease'].'" class="required form-control form-input" hidden>
                            <div class="row">
                                        <div class="col-lg-12 text-left">
                                            <div class="form-tambah">
                                                <p class="form-tittle" style="text-indent:20px;"> Laporan '.$datareport[$i]['name'].' - '.$monthreport.' '.$yerareport.' </p>
                                            </div>
                                        </div>
                                    </div>
                                <div class="row">
                                <div class="col-lg-6" style="border-right: 1px solid #e5e5e5;">
                                    <div class="row form-space">
                                        <div class="col-lg-4 text-left">
                                            <div class="form-tambah">
                                                <a>Nama Organisasi</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 text-left">
                                            <div class="form-tambah">
                                                <a>:</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                            <input  type="text" id="" name="" value="'.$datareport[$i]['name'].'" class="required form-control form-input" readonly>  
                                        </div>
                                    </div>
                                    <div class="row form-space">
                                        <div class="col-lg-4 text-left">
                                            <div class="form-tambah">
                                                <a>Penanggung Jawab</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 text-left">
                                            <div class="form-tambah">
                                                <a>:</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                            <input  type="text" id="" name="" value="'.$datareport[$i]['person'].'" class="required form-control form-input" readonly>  
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="col-lg-6">
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
                                            
                                            <input  type="text" id="" name="" value="'.$datareport[$i]['kode'].'" class="required form-control form-input" readonly>  
                                            
                                        </div>
                                    </div>
                                     <div class="row form-space">
                                        <div class="col-lg-4 text-left">
                                            <div class="form-tambah">
                                                <a >Tanggal Pelaporan</a>
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
                                        <div class="col-lg-4 text-left">
                                            <div class="form-tambah">
                                                <a >Batas Akhir</a>
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
                              
                        </div>
                                <div class="row detailreport" >
                                    <div class="col">
                                        <div id="accordion" role="tablist" aria-multiselectable="true">
                                        <a data-toggle="collapse" href="#collapse'.$dataquery[$i]['id'].'" aria-expanded="true" aria-controls="collapseOne">
                                                <div class="card-header" role="tab" id="headingOne">
                                                    <h5 class="mb-0">Pemantauan Pelaporan ('.$dataquery[$i]['name'].' '.$monthreport.' '.$yerareport.')</h5>
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
                                                                        <th >Status Pelaporan</th>
                                                                        
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                ';
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
                                                                        $sumsskrining=$sumsskrining.' Orang';
                                                                    }
                                                                    if($datachild[$j]['datecomplete']=="0000-00-00"){
                                                                        $datachild[$j]['datecomplete']="-";
                                                                    }else{

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
                                                                echo '
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                          <div class="modal-footer">
                             
                                    <input  type="submit" value="Laporkan" class="btn btn-success">
                         
                                   
                                </div>
                        </div>
                </div><!-- /# column -->
            </div>
        </form>';
	}

?>