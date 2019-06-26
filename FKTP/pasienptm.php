
<!Doctype html>
<html class="no-js" lang=""> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SISTEM P2PTM</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <?php include('include/style.php'); ?>
</head>
<body ">

   <?php include('include/navbar.php'); ?> 


        <div class="content pb-0">

            <!-- Widgets  -->
            <div class="row" style="margin-bottom: 30px">
                <div class="col-lg-3 col-md-6">
                    <h3 style="color:#8c8e8d;"><b>Data Pasien PTM </b></h3>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="row">
                        <div class="col-lg-4" >
                            <div class="input-group">
                                    <div class="input-group">
                                    <div class="input-group-btn" style="-webkit-box-shadow: 0 4px 8px   rgba(0, 0, 0, 0.20);box-shadow: 0 4px 8px  rgba(0, 0, 0, 0.20);">
                                        <div class="btn-group" >
                                            <div id="filterpenyakit">
                                            </div>
                                            </div>
                                        </div>      
                                    </div>
                                </div>
                                
                            
                        </div>
                        <div class="col-lg-5" style="padding-right: 0px;max-width: 39.666667%;">
                            
                                <div class="input-prepend input-group" style="width: 190px;-webkit-box-shadow: 0 4px 8px   rgba(0, 0, 0, 0.20);box-shadow: 0 4px 8px  rgba(0, 0, 0, 0.20);"> 
                            <input type="button" value=" Tanggal                          &#x1F4C6;" style="cursor: pointer;"  name="reportrange" id="reportrange" class="text-left form-control" value=""><span class=""></span>
                            

                            </div>
                            
                        </div>
                        <div class="col-lg-3" style="padding-left: 0px;">
                            
                                <div id ="filter_global" class="input-group" style="-webkit-box-shadow: 0 4px 8px   rgba(0, 0, 0, 0.20);box-shadow: 0 4px 8px  rgba(0, 0, 0, 0.20);">
                                    <input id="global_filter" name="x_card_code" type="text" class="form-control global_filter cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" autocomplete="off" placeholder="Cari">
                                    

                                        <div class="input-group-addon">
                                            <span class="fa fa-search fa-sm" data-toggle="popover" data-container="body" data-html="true" data-title="Security Code"
                                                            data-content="<div class='text-center one-card'>The 3 digit code on back of the card..<div class='visa-mc-cvc-preview'></div></div>"
                                                            data-trigger="hover"></span>
                                         </div>
                                </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" style="padding-left: unset!important">
                    <div class="row">
                        

                        <div class="col-lg-6 col-md-2">
                            
                                
                                    <div class="input-group-btn text-right">
                                        <button class="btn btn-secondary" style="-webkit-box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);" data-toggle="modal" data-target="#mediumModal">
                                            <i class="fa fa-plus fa-lg"></i> <a class="tambah">Tambah</a>
                                        </button>
                                    </div>
                               
                            
                        </div>
                        <div class="col-lg-6 col-md-2">
                           
                                
                                    <div class="input-group-btn" >
                                        <button class="btn btn-secondary " id="unduhexcel" style="-webkit-box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);">
                                            <i class="fa fa-arrow-down fa-lg"></i><a class="unduh">Unduh</a>
                                        </button>
                                    </div>
                                
                            
                        </div>

                    </div>
                </div>

                
            </div> 
            <!-- Widgets End -->
            <?php 
                if(isset($_GET['data'])){
                    if($_GET['data']=="duplicate"){
                        echo "<div class='row'><div class='col-lg-12'><div class='card' style='margin-bottom: 20px;'><div class='card-body dataerror' style='padding:10px;'>Gagal menambah Data Pasien. Diagnosa sama pada Tanggal Kunjungan Pasien yang sama tidak diperbolehkan!.</div></div></div></div>";
                    }else if($_GET['data']=="null"){
                        echo "<div class='row'><div class='col-lg-12'><div class='card' style='margin-bottom: 20px;'><div class='card-body dataerror' style='padding:10px;'>Gagal menambah Data Pasien. Tanggal lahir tidak diperbolehkan melebihi Tanggal Kunjungan!.</div></div></div></div>";
                    }
                    }
            ?>
            <div class="row">
                <div class="col-lg-12">
                        <div class="card" >
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>fktp_id</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Tanggal lahir</th>
                                            <th>Diagnosa</th>
                                            <th>Tanggal Kunjungan</th>
                                            <th>Janis Kelamin</th>
                                            <th>Status</th>
                                            <th>Umur</th>
                                            <th></th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>

                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                     
                </div><!-- /# column -->
            </div>
            <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <form id="tambahdata" method="POST" action="action/Tambah/TambahPasien.php">
                    
                        <div class="modal-header">
                            <a class="modal-title" id="mediumModalLabel">Tambah Data Pasien</a>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6" style="border-right: 1px solid #e5e5e5;">
                                    <div class="row form-space">
                                        <div class="col-lg-10 text-left">
                                            <div class="form-tambah">
                                                <p class="form-tittle"> Data Pribadi </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-space">
                                        <div class="col-lg-3 text-left">
                                            <div class="form-tambah">
                                                <a>NIK</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                            <input  type="text" id="nik" name="nik" placeholder="Masukan NIK Pasien" class="required form-control form-input">  
                                        </div>
                                    </div>
                                    <div class="row form-space">
                                        <div class="col-lg-3 text-left">
                                            <div class="form-tambah">
                                                <a>Nama Lengkap</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                            <input  type="text" id="nama" name="nama" placeholder="Masukan Nama Lengkap Pasien" class="required form-control form-input">  
                                        </div>
                                    </div>
                                    <div class="row form-space">
                                        <div class="col-lg-3 text-left">
                                            <div class="form-tambah">
                                                <a>Jenis Kelamin</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                             <select data-placeholder="" type="text" id="jeniskelamin" name="jeniskelamin" class=" form-control form-input standardSelect required" tabindex="1"> 
                                                <option  class="option" value="" hidden selected>Pilih Jenis Kelamin</option>
                                                <option value="Laki-Laki">Laki-Laki</option> 
                                                <option value="Perempuan">Perempuan</option>                                        
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-space">
                                        <div class="col-lg-3 text-left">
                                            <div class="form-tambah">
                                                <a>Tanggal Lahir</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                            <input  type="text" id="tanggallahir" autocomplete="off" name="tanggallahir" placeholder="Pilih tanggal" class="required tanggal form-control form-input" >  
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row form-space">
                                        <div class="col-lg-11 text-left">
                                            <div class="form-tambah">
                                                <p class="form-tittle"> Data Penyakit Tidak Menular </p>
                                            </div>
                                        </div>
                                       
                                    </div>
                                     <div class="row form-space">
                                        <div class="col-lg-4 text-left">
                                            <div class="form-tambah">
                                                <a >Tanggal Kunjungan</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                            <input  type="text" id="tanggalkunjungan" autocomplete="off" name="tanggalkunjungan" placeholder="Pilih tanggal" class="required tanggal form-control form-input" >
                                        </div>
                                    </div>
                                    <div class="row form-space">
                                        <div class="col-lg-4 text-left">
                                            <div class="form-tambah">
                                                <a >Diagnosa</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                             <select data-placeholder="" type="text" id="diagnosa" name="diagnosa" class=" form-control form-input standardSelect required" tabindex="1"> 
                                                <option  class="option" value="" hidden selected>Pilih Penyakit</option>
                                                <?php
                                                    $datadisease=array();
                                                    $queryoption=mysqli_query($koneksi,"SELECT * FROM disease");
                                                    $optionnum=mysqli_num_rows($queryoption);
                                                    while($rowoption=mysqli_fetch_assoc($queryoption)){
                                                        $datadisease[]=$rowoption;
                                                    }
                                                    for($d=0;$d<$optionnum;$d++){
                                                        echo '<option value="'.$datadisease[$d]['id'].'">'.$datadisease[$d]['name'].'</option>';
                                                    }
                                                 ?>                                        
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                              
                        </div>
                        <div class="modal-footer">
                            <input  type="reset" value="Batal" class="btn btn-danger" data-dismiss="modal">
                            <input  type="submit" value="Tambah" class="btn btn-success">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" >
                    <div class="modal-content">
                    <form id="editdata" method="POST" action="action/Ubah/UbahPasien.php">
                        <div class="modal-header">
                            <a class="modal-title" id="largeModalLabel">Ubah Data <b id="ubahlabel"></b></a>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6" style="border-right: 1px solid #e5e5e5;">
                                    <div class="row form-space">
                                        <div class="col-lg-10 text-left">
                                            <div class="form-tambah">
                                                <p class="form-tittle"> Data Pribadi </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-space" hidden>
                                        
                                        <div class="col-lg-3 text-left">
                                            <div class="form-tambah">
                                                <a >id</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                            <input  type="text" id="ubahid" name="ubahid"  class=" form-control form-input" >
                                        </div>
                                    </div>
                                    <div class="row form-space">
                                        <div class="col-lg-3 text-left">
                                            <div class="form-tambah">
                                                <a>NIK</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                            <input  type="text" id="ubahnik" name="ubahnik" placeholder="Masukan NIK Pasien" class="required form-control form-input">  
                                        </div>
                                    </div>
                                    <div class="row form-space">
                                        <div class="col-lg-3 text-left">
                                            <div class="form-tambah">
                                                <a>Nama Lengkap</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                            <input  type="text" id="ubahnama" name="ubahnama" placeholder="Masukan Nama Lengkap Pasien" class="required form-control form-input">  
                                        </div>
                                    </div>
                                    <div class="row form-space">
                                        <div class="col-lg-3 text-left">
                                            <div class="form-tambah">
                                                <a>Jenis Kelamin</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                             <select data-placeholder="" type="text" id="ubahjeniskelamin" name="ubahjeniskelamin" class=" form-control form-input standardSelect required" tabindex="1"> 
                                                <option  class="option" value="" hidden selected>Pilih Jenis Kelamin</option>
                                                <option value="Laki-Laki">Laki-Laki</option> 
                                                <option value="Perempuan">Perempuan</option>                                        
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-space">
                                        <div class="col-lg-3 text-left">
                                            <div class="form-tambah">
                                                <a>Tanggal Lahir</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                            <input  type="text" id="ubahtanggallahir" autocomplete="off" name="ubahtanggallahir" placeholder="Pilih tanggal" class="required tanggal form-control form-input" >  
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row form-space">
                                        <div class="col-lg-11 text-left">
                                            <div class="form-tambah">
                                                <p class="form-tittle"> Data Penyakit Tidak Menular </p>
                                            </div>
                                        </div>
                                       
                                    </div>
                                     <div class="row form-space">
                                        <div class="col-lg-4 text-left">
                                            <div class="form-tambah">
                                                <a >Tanggal Kunjungan</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                            <input  type="text" id="ubahtanggalkunjungan" autocomplete="off" name="ubahtanggalkunjungan" placeholder="Pilih tanggal" class="required tanggal form-control form-input" >
                                        </div>
                                    </div>
                                    <div class="row form-space">
                                        <div class="col-lg-4 text-left">
                                            <div class="form-tambah">
                                                <a >Diagnosa</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                             <select data-placeholder="" type="text" id="ubahdiagnosa" name="ubahdiagnosa" class=" form-control form-input standardSelect required" tabindex="1"> 
                                                <option  class="option" value="" hidden selected>Pilih Penyakit</option>
                                                <?php
                                                for($d=0;$d<$optionnum;$d++){
                                                        echo '<option value="'.$datadisease[$d]['id'].'">'.$datadisease[$d]['name'].'</option>';
                                                    }
                                                ?>                                           
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                              
                        </div>
                        <div class="modal-footer">
                            <input  type="reset" value="Batal" class="btn btn-danger" data-dismiss="modal">
                            <input  type="submit" value="Ubah" class="btn btn-success">
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="largeModal1" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" >
                    <div class="modal-content">
                    <form id="" method="" action="">
                        <div class="modal-header">
                            <a class="modal-title" id="largeModalLabel">Detail Data <b id="detaillabel"></b></a>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row form-space-detail" >
                                <div class="col-md-2 text-left form-detail-name" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >Nama Lengkap</a>
                                    </div>
                                </div>
                                <div class="col-md-1 text-left form-detail-sep" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >:</a>
                                    </div>
                                </div>
                                <div class="col-lg-9 text-left form-detail" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a id="detailnama" ></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-space-detail" >
                                <div class="col-md-2 text-left form-detail-name" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >NIK</a>
                                    </div>
                                </div>
                                <div class="col-md-1 text-left form-detail-sep" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >:</a>
                                    </div>
                                </div>
                                <div class="col-lg-9 text-left form-detail" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a id="detailnik" ></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-space-detail" >
                                <div class="col-md-2 text-left form-detail-name" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >Jenis Kelamin</a>
                                    </div>
                                </div>
                                <div class="col-md-1 text-left form-detail-sep" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >:</a>
                                    </div>
                                </div>
                                <div class="col-lg-9 text-left form-detail" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a id="detailjeniskelamin" ></a>
                                    </div>
                                </div>
                            </div>
                             <div class="row form-space-detail" >
                                <div class="col-md-2 text-left form-detail-name" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >Umur</a>
                                    </div>
                                </div>
                                <div class="col-md-1 text-left form-detail-sep" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >:</a>
                                    </div>
                                </div>
                                <div class="col-lg-9 text-left form-detail" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a id="detailumur" ></a><b> Tahun</b>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-space-detail" >
                                <div class="col-md-2 text-left form-detail-name" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >Tanggal Lahir</a>
                                    </div>
                                </div>
                                <div class="col-md-1 text-left form-detail-sep" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >:</a>
                                    </div>
                                </div>
                                <div class="col-lg-9 text-left form-detail" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a id="detailtanggallahir" ></a>
                                    </div>
                                </div>
                            </div>
                           
                             <div class="row form-space">
                                        <div class="col-lg-11 text-left">
                                            <div class="form-tambah">
                                                <p class="form-tittle"style="padding-top: 8px;color:#03bbd3!important;border-bottom: 0px solid #e5e5e5!important;"> Data Penyakit</p>
                                            </div>
                                        </div>
                                    </div>

                            <div class="row form-space-detail" >
                                <div class="col-md-2 text-left form-detail-name" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >Diagnosa</a>
                                    </div>
                                </div>
                                <div class="col-md-1 text-left form-detail-sep" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >:</a>
                                    </div>
                                </div>
                                <div class="col-lg-9 text-left form-detail" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a id="detaildiagnosa" ></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-space-detail" >
                                <div class="col-md-2 text-left form-detail-name" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >Tanggal Kunjungan</a>
                                    </div>
                                </div>
                                <div class="col-md-1 text-left form-detail-sep" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >:</a>
                                    </div>
                                </div>
                                <div class="col-lg-9 text-left form-detail" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a id="detailkunjungan" ></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-space-detail" >
                                <div class="col-md-2 text-left form-detail-name" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >Pasien (Baru/Lama)</a>
                                    </div>
                                </div>
                                <div class="col-md-1 text-left form-detail-sep" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >:</a>
                                    </div>
                                </div>
                                <div class="col-lg-9 text-left form-detail" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a id="detailstatus" ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input  type="reset" value="Tutup" class="btn btn-danger" data-dismiss="modal">
                            
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="deletedata" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" style="margin: auto 25rem;" >
                    <div class="modal-content" style="width: 700px;">
                    <form id="" method="POST" action="action/Hapus/HapusPasien.php">
                        <div class="modal-header">
                            <a class="modal-title" id="largeModalLabel">Hapus Data Pasien</a>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                         <div class="modal-body" >
                            <div class="row form-space">
                                
                                <div class="col-lg-12 text-left">
                                    <div class="form-tambah">
                                        <a >Apakah Anda yakin menghapus semua data dari </a><a style="color:#eb5757!important;font-size: 16px; " id="deletenama"></a><a>?</a>
                                    </div>
                                </div>
                                <input  type="text" id="deleteid" name="deleteid" placeholder="Masukan Nomor Handphone" class="did required form-control form-input" hidden>
                                
                            </div>
                            

                        </div>
                        <div class="modal-footer">
                            <input  type="reset" value="Batal" class="btn btn-danger" data-dismiss="modal">
                            <input  type="submit" value="Hapus" class="btn btn-success">

                        </div>
                    </form>
                    </div>
                </div>
            </div>

  

          


        </div> <!-- .content -->


        
        <?php include('include/footer.php'); ?> 
     
    <script type="text/javascript">
            $('select').change(function() {
                 if ($(this).children('option:first-child').is(':selected')) {
                   $(this).addClass('placeholder');
                 } else {
                  $(this).removeClass('placeholder');
                 }
                });

            $(document).ready(function() {

                
               $("#unduhexcel").on("click", function() {
                            table.button( '.buttons-excel' ).trigger();
                }); 
                 $('input.global_filter').on( 'keyup click', function () {
                             $('#bootstrap-data-table').DataTable().search(
                                $('#global_filter').val(),
                            ).draw();
                            } );
               $(function() {
                            var start = moment();
                            var end = moment();
                             $('input[name="reportrange"]').on('apply.daterangepicker', function(ev, picker) {
                                  $(this).val(picker.startDate.format('MMM D, YYYY') + ' - ' + picker.endDate.format('MMM D, YYYY'));
                              });

                              $('input[name="reportrange"]').on('cancel.daterangepicker', function(ev, picker) {
                                  $(this).val('');
                              });

                            function cb(start, end) {
                              $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                            }

                            $('#reportrange').daterangepicker({
                                autoUpdateInput: false,
                                "locale": {
                                    "format": "MMM D, YYYY",
                                    "separator": " - ",
                                    "applyLabel": "Pilih",
                                    "cancelLabel": "Batal",
                                    "fromLabel": "Mulai",
                                    "toLabel": "Sampai",
                                    "customRangeLabel": "Sesuaikan",
                                    "daysOfWeek": [
                                        "Min",
                                        "Sen",
                                        "Sel",
                                        "Rab",
                                        "Kam",
                                        "jum",
                                        "Sab"
                                    ],
                                    "monthNames": [
                                        "Januari",
                                        "Februari",
                                        "Maret",
                                        "April",
                                        "Mei",
                                        "Juni",
                                        "July",
                                        "Augustus",
                                        "September",
                                        "Oktober",
                                        "November",
                                        "Desember"
                                    ],
                                    "firstDay": 1
                                },
                                "alwaysShowCalendars": true,
                                "opens": "left",
                                startDate: start,
                                endDate: end,
                                ranges: {
                                'Hari ini': [moment(), moment()],
                                'Kemarin': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                                '7 Hari sebelumnya': [moment().subtract(6, 'days'), moment()],
                                '30 Hari sebelumnya': [moment().subtract(29, 'days'), moment()],
                                'Bulan ini': [moment().startOf('month'), moment().endOf('month')],
                                'Sebulan terakhir': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                              }
                            }, cb);

                            cb(start, end);

                          });
                         

                          $('#reportrange').on('apply.daterangepicker', function(ev, picker) {

                           var start = picker.startDate;
                           var end = picker.endDate;


                          $.fn.dataTable.ext.search.push(
                            function(settings, data, dataIndex) {
                              var min = start;
                              var max = end;
                              var startDate = new Date(data[6]);
                              
                              if (min == null && max == null) {
                                return true;
                              }
                              if (min == null && startDate <= max) {
                                return true;
                              }
                              if (max == null && startDate >= min) {
                                return true;
                              }
                              if (startDate <= max && startDate >= min) {
                                return true;
                              }
                              return false;
                            }
                          );
                          table.draw();
                          $.fn.dataTable.ext.search.pop();
                            });
                var dataSet = [
                <?php include('action/pasien_clientside.php'); ?>                
                <?php for ($i = 0; $i < $rowresult; $i++){ 
                    echo '
                    [ "'.$data[$i]['id'].'","'.$data[$i]['user_id'].'","'.$data[$i]['nik'].'","'.$data[$i]['name'].'","'.$data[$i]['birthdate'].'","'.$data[$i]['penyakit'].'","'.$data[$i]['visitdate'].'","'.$data[$i]['gender'].'","'.$data[$i]['status'].'","'.$data[$i]['age'].'","'.$data[$i]['idd'].'"],';
                    } 
                ?>
                ];
              var table=$('#bootstrap-data-table').DataTable({
                data:dataSet,
                // "serverSide": true,
                // "ajax": "action/pasien_serverside.php",
                "columnDefs": [ {
                     "targets": -1,
                     "data": null,

                     "defaultContent": "<button type='button' class='detaildata' data-toggle='modal' data-target='#largeModal1' data-info=''>Detail</button><button type='button' class='editdata' data-toggle='modal' data-target='#largeModal' data-info=''>Ubah</button><button type='button' class='deletedata' data-toggle='modal' data-target='#deletedata' data-info=''>Hapus</button>"},
                    {
                        "targets": [ 0 ],
                        "visible": false
                                
                    },
                    {
                        "targets": [ 1 ],
                        "visible": false
                                
                    },
                    {"targets":[6], render:function(data){
                                    return moment(data).format('MMM D, YYYY');
                    }},
                    {
                        "targets": [ 4 ],
                        "visible": false
                                
                    },
                     
                    {
                        "targets": [ 8 ],
                        "visible": false
                                
                    },
                    {
                        "targets": [ 9 ],
                        "visible": false
                                
                    },
                    {
                        "targets": [ 10 ],
                        "visible": false
                                
                    },
                 

                    ],
                buttons: [
                                { 
                                    extend: 'excel',
                                    title: 'Data pasien',
                                    exportOptions: {
                                        columns: [ 1, 5, 6 ,7,8]
                                    }
                                }
                            ], 
                "language": {
                            "paginate": {    
                                        "next":       "Selanjutnya"
                                        }
                            },                
                
                initComplete: function () { 
                this.api().column( 1 ).every( function () {
                var column = this;
                var select = $('<select class="form-control btn btn-primary placeholder "><option value="">Pelayanan</option><option value="">Semua</option></select>')
                    .appendTo( $('#filterA').empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
                        column.search( this.value ).draw();
                    } );
                    
                            column.data().unique().sort().each( function ( d, j ) {
                                select.append( '<option  value="'+d+'">'+d+'</option>' )
                            } );
                        } );
                this.api().column( 5 ).every( function () {

                var column = this;

                var select = $('<select  class="form-control btn btn-primary placeholder "><option value="">Penyakit</option><option value="">Semua</option></select>')
                    .appendTo( $('#filterpenyakit').empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        ); 
                        column.search( this.value ).draw();
                    } );
                            column.data().unique().sort().each( function ( d, j ) {
                                select.append( '<option value="'+d+'">'+d+'</option>' )
                            } );
                        } );
                    $('#filterA select').niceSelect();
                    $('#filterpenyakit select').niceSelect();   
                    }

              });
                var bulan = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
                var months = ['January','February','March','April','May','June','July','August','September','October','November','December'];
              $('#bootstrap-data-table tbody').on( 'click', '.editdata', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    $('#ubahlabel').text(data[3]);
                    $('#ubahid').val(data[0]);
                    $('#ubahnik').val(data[2]);
                    $('#ubahnama').val(data[3]);
                    var date = new Date(data[4]);
                    $('#ubahtanggallahir').val( ("0" +date.getDate()).slice(-2) + ' ' + months[date.getMonth()] + ' ' + date.getFullYear() );
                    $('#ubahdiagnosa').find(':selected').val(data[10]).text(data[5]);
                    var datevisit = new Date(data[6]);
                    $('#ubahtanggalkunjungan').val( ("0" +datevisit.getDate()).slice(-2) + ' ' + months[datevisit.getMonth()] + ' ' + datevisit.getFullYear() );
                    $('#ubahjeniskelamin').find(':selected').val(data[7]).text(data[7]);
                    });
              $('#bootstrap-data-table tbody').on( 'click', '.detaildata', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    $('#detaillabel').text(data[3]);
                    $('#detailnama').text(data[3]);
                    $('#detailnik').text(data[2]);
                    $('#detailjeniskelamin').text(data[7]);
                    var date = new Date(data[4]);
                    $('#detailtanggallahir').text( ("0" +date.getDate()).slice(-2) + ' ' + bulan[date.getMonth()] + ' ' + date.getFullYear() );
                    $('#detaildiagnosa').text(data[5]);
                    var datevisit = new Date(data[6]);
                    $('#detailkunjungan').text( ("0" +datevisit.getDate()).slice(-2) + ' ' + bulan[datevisit.getMonth()] + ' ' + datevisit.getFullYear() );
                    $('#detailstatus').text(data[8]);
                    // var dateage=datevisit.getFullYear()-date.getFullYear();
                    $('#detailumur').text(data[9]);
                    });
               $('#bootstrap-data-table tbody').on( 'click', '.deletedata', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    $('#deleteid').val(data[0]);
                    $('#deletenama').text(data[3]);
                    
                    });
            
            } );
    </script>
    <script type="text/javascript"> 
        $(document).ready(function () {
            $('#mediumModal select').niceSelect();
            
            $('#mediumModal').on('hidden.bs.modal', function () {
               
                $('#tambahdata').prop('selectedIndex',0);
                $('#tambahdata').validate().resetForm();
                $('.error').removeClass('error');
            });
            $('#largeModal').on('hidden.bs.modal', function () {
                
                $('#editdata').prop('selectedIndex',0);
                $('#editdata').validate().resetForm();
                $('.error').removeClass('error');
            });
            $('#tambahdata').validate({
             ignore: [],
            rules: {
                    nik: { required: true,number:true,minlength:16,maxlength:16 },
                    nama: { required: true },
                    jeniskelamin: { required: true },
                    tanggallahir: { required: true },
                    tanggalkunjungan: { required: true },
                    diagnosa: { required: true }
                    },
            messages: {
                    nik: {required: "NIK Pasien kosong!",number:"NIK hanya berisi angka saja!",minlength:"NIK Pasien kurang dari 14 digit!",maxlength:"NIK Pasien lebih dari 14 digit!"},
                    nama: {required: "Nama Pasien kosong!"},
                    jeniskelamin: { required: "Jenis Kelamin Pasien belum dipilih!" },
                    tanggallahir: { required: "Tanggal Lahir Pasien kosong!" },
                    tanggalkunjungan: { required: "Tanggal Kunjungan kosong!"},
                    diagnosa: { required: "Diagnosa Pasien kosong!" }
                    },
            errorPlacement: function(error, element) {
            if (element.is('select:hidden')) {
                error.insertAfter(element.next('.nice-select'));
            } else {
                error.insertAfter(element);
            }
            }

            });
            $('#editdata').validate({
            ignore: [],
            rules: {
                    ubahnik: { required: true,number:true,minlength:16,maxlength:16 },
                    ubahnama: { required: true },
                    ubahjeniskelamin: { required: true },
                    ubahtanggallahir: { required: true },
                    ubahtanggalkunjungan: { required: true },
                    ubahdiagnosa: { required: true }
                    },
            messages: {
                    ubahnik: {required: "NIK Pasien kosong!",number:"NIK hanya berisi angka saja!",minlength:"NIK Pasien kurang dari 14 digit!",maxlength:"NIK Pasien lebih dari 14 digit!"},
                    ubahnama: {required: "Nama Pasien kosong!"},
                    ubahjeniskelamin: { required: "Jenis Kelamin Pasien belum dipilih!" },
                    ubahtanggallahir: { required: "Tanggal Lahir Pasien kosong!" },
                    ubahtanggalkunjungan: { required: "Tanggal Kunjungan kosong!"},
                    ubahdiagnosa: { required: "Diagnosa Pasien kosong!" }
                    },
            errorPlacement: function(error, element) {
            if (element.is('select:hidden')) {
                error.insertAfter(element.next('.nice-select'));
            } else {
                error.insertAfter(element);
            }
            }            
            }); 
             

        });      
    </script>
     <script type="text/javascript">
        
        $(document).ready(function () {
                
                // $('.tanggal').datepicker({
                //     format: "dd-mm-yyyy",
                //     autoclose:true,
                //     orientation: 'bottom'

                // });
                var datePicker = $(".tanggal").datepicker({
                    format: "dd MM yyyy",
                autoclose:true});
                var t ;

                $( document ).on(
                    'DOMMouseScroll mousewheel scroll',
                    '#mediumModal', 
                    function(){       
                        window.clearTimeout( t );
                        t = window.setTimeout( function(){            
                            $('.tanggal').datepicker('place')
                        }, 0 );        
                    }
                );
            
            
            
          
        }); 
       
                
     

    </script>
     
    




<div id="container">
  
 
  
</div>



</body>
</html>
