
<!Doctype html>
<html class="no-js" lang=""> 
<head>
    

     <?php include('include/style.php'); ?>
</head>
<body ">

   <?php include('include/navbar.php'); ?> 


        <div class="content pb-0">

            <!-- Widgets  -->
            <div class="row" style="margin-bottom: 30px">
                <div class="col-lg-3 col-md-6">
                    <h3 style="color:#8c8e8d;"><b>Data Puskesmas</b></h3>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="row">
                        <div class="col-lg-4">
                            
                                
                            
                        </div>
                        <div class="col-lg-4">
                            
                                <div class="input-group">
                                    <div class="input-group">
                                    <div class="input-group-btn" style="-webkit-box-shadow: 0 4px 8px   rgba(0, 0, 0, 0.20);box-shadow: 0 4px 8px  rgba(0, 0, 0, 0.20);">
                                        <div class="btn-group" >
                                            <div id="filterarea">
                                            </div>
                                            </div>
                                        </div>      
                                    </div>
                                </div>
                            
                        </div>
                        <div class="col-lg-4">
                            
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


          
            <div class="row">
                <div class="col-lg-12">
                        <div class="card" >
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Nama Puskesmas</th>
                                            <th>Penanggung Jawab</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Level</th>
                                            <th>Pelayanan</th>
                                            <th>Email</th>
                                            <th>Wilayah Pelayanan</th>
                                            <th>Telepon</th>
                                            <th>Alamat</th>
                                            <th>Login Terakhir</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                     
                </div><!-- /# column -->
            </div>
            <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <form id="tambahdata" method="POST" action="action/Tambah/TambahPuskesmas.php">
                    
                        <div class="modal-header">
                            <a class="modal-title" id="mediumModalLabel">Tambah Puskesmas</a>
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
                                                <p class="form-tittle"> Data Akses </p>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    
                                    <div class="row form-space">
                                        
                                        <div class="col-lg-3 text-left">
                                            <div class="form-tambah">
                                                <a >Username</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                            <input  type="text" id="username" name="username" placeholder="Masukan Username Puskesmas" class="required form-control form-input">
                                            
                                        </div>
                                    </div>
                                    <div class="row form-space">
                                        
                                        <div class="col-lg-3 text-left">
                                            <div class="form-tambah">
                                                <a >Password</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                            <input  type="text" id="password" name="password" placeholder="Masukan Password Puskesmas" class="required form-control form-input">
                                            
                                        </div>
                                    </div>
                                          
                                </div>
                                <div class="col-lg-6">
                                    <div class="row form-space">
                                        <div class="col-lg-11 text-left">
                                            <div class="form-tambah">
                                                <p class="form-tittle"> Data Puskesmas </p>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="row form-space">
                                        <div class="col-lg-4 text-left">
                                            <div class="form-tambah">
                                                <a >Nama Puskesmas</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                            <input  type="text" id="nama" name="nama" placeholder="Masukan Nama Puskesmas" class="required form-control form-input">
                                            
                                        </div>
                                    </div>
                                     <div class="row form-space">
                                        <div class="col-lg-4 text-left">
                                            <div class="form-tambah">
                                                <a >Penanggung Jawab</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                            <input  type="text" id="pj" name="pj" placeholder="Masukan Penanggung Jawab Puskesmas" class="required form-control form-input">
                                            
                                        </div>
                                    </div>
                                    <div class="row form-space">
                                        
                                        <div class="col-lg-4 text-left">
                                            <div class="form-tambah">
                                                <a >Wilayah Kerja</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                            
                                            <select data-placeholder="" type="text" id="area" name="area" class=" form-control form-input standardSelect required" tabindex="1"> 
                                                <option  class="option" value="" hidden selected>Pilih Wilayah Kerja</option>
                                                <option value="Berbah">Berbah</option> 
                                                <option value="Cangkringan">Cangkringan</option>
                                                <option value="Depok">Depok</option>
                                                <option value="Gamping">Gamping</option>
                                                <option value="Godean">Godean</option>
                                                <option value="Kalasan">Kalasan</option>
                                                <option value="Minggir">Minggir</option>
                                                <option value="Mlati">Mlati</option>
                                                <option value="Moyudan">Moyudan</option>
                                                <option value="Ngaglik">Ngaglik</option>
                                                <option value="Ngemplak">Ngemplak</option>
                                                <option value="Seyegan">Seyegan</option>
                                                <option value="Sleman">Sleman</option>
                                                <option value="Tempel">Tempel</option>
                                                <option value="Turi">Turi</option> 
                                                <option value="Pakem">Pakem</option>
                                                <option value="Prambanan">Prambanan</option>                                                  
                                            </select>
                                            
                                        </div>
                                    </div>
                                    <div class="row form-space">
                                        
                                        <div class="col-lg-4 text-left">
                                            <div class="form-tambah">
                                                <a >Telepon</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                            <input  type="text" id="telepon" name="telepon" placeholder="Masukan Nomor Telepon Puskesmas"  class="required form-control form-input" >
                                            
                                        </div>
                                    </div>
                                    <div class="row form-space">
                                        
                                        <div class="col-lg-4 text-left">
                                            <div class="form-tambah">
                                                <a >Email</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                            <input  type="text" id="email" name="email" placeholder="Masukan Email Puskesmas"  class="required form-control form-input" >
                                            
                                        </div>
                                    </div>
                                     <div class="row form-space">
                                        
                                        <div class="col-lg-4 text-left">
                                            <div class="form-tambah">
                                                <a >Alamat</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                            <input  type="text" id="alamat" name="alamat" placeholder="Masukan Alamat Puskesmas"  class="required form-control form-input" >
                                            
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
                    <form id="editdata" method="POST" action="action/Ubah/UbahPuskesmas.php">
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
                                                <p class="form-tittle"> Data Akses </p>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="row form-space" hidden>
                                        
                                        <div class="col-lg-3 text-left">
                                            <div class="form-tambah">
                                                <a >Username</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                            <input  type="text" id="ubahid" name="ubahid" placeholder="Masukan Username Puskesmas" class=" form-control form-input" >
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="row form-space">
                                        
                                        <div class="col-lg-3 text-left">
                                            <div class="form-tambah">
                                                <a >Username</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                            <input  type="text" id="ubahusername" name="ubahusername" placeholder="Masukan Username Puskesmas" class="required form-control form-input">
                                            
                                        </div>
                                    </div>
                                    <div class="row form-space">
                                        
                                        <div class="col-lg-3 text-left">
                                            <div class="form-tambah">
                                                <a >Password</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                            <input  type="text" id="ubahpassword" name="ubahpassword" placeholder="Masukan Password Puskesmas" class="required form-control form-input">
                                            
                                        </div>
                                    </div>
                                          
                                </div>
                                <div class="col-lg-6">
                                    <div class="row form-space">
                                        <div class="col-lg-11 text-left">
                                            <div class="form-tambah">
                                                <p class="form-tittle"> Data Puskesmas </p>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="row form-space">
                                        <div class="col-lg-4 text-left">
                                            <div class="form-tambah">
                                                <a >Nama Puskesmas</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                            <input  type="text" id="ubahnama" name="ubahnama" placeholder="Masukan Nama Puskesmas" class="required form-control form-input">
                                            
                                        </div>
                                    </div>
                                     <div class="row form-space">
                                        <div class="col-lg-4 text-left">
                                            <div class="form-tambah">
                                                <a >Penanggung Jawab</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                            <input  type="text" id="ubahpj" name="ubahpj" placeholder="Masukan Penanggung Jawab Puskesmas" class="required form-control form-input">
                                            
                                        </div>
                                    </div>
                                    <div class="row form-space">
                                        
                                        <div class="col-lg-4 text-left">
                                            <div class="form-tambah">
                                                <a >Wilayah Kerja</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                            
                                            <select data-placeholder="" type="text" id="ubaharea" name="ubaharea" class=" form-control form-input standardSelect required" tabindex="1"> 
                                                <option  class="option" value="" hidden selected>Pilih Wilayah Kerja</option>
                                               <option value="Berbah">Berbah</option> 
                                                <option value="Cangkringan">Cangkringan</option>
                                                <option value="Depok">Depok</option>
                                                <option value="Gamping">Gamping</option>
                                                <option value="Godean">Godean</option>
                                                <option value="Kalasan">Kalasan</option>
                                                <option value="Minggir">Minggir</option>
                                                <option value="Mlati">Mlati</option>
                                                <option value="Moyudan">Moyudan</option>
                                                <option value="Ngaglik">Ngaglik</option>
                                                <option value="Ngemplak">Ngemplak</option>
                                                <option value="Seyegan">Seyegan</option>
                                                <option value="Sleman">Sleman</option>
                                                <option value="Tempel">Tempel</option>
                                                <option value="Turi">Turi</option> 
                                                <option value="Pakem">Pakem</option>
                                                <option value="Prambanan">Prambanan</option>                                        
                                            </select>
                                            
                                        </div>
                                    </div>
                                    <div class="row form-space">
                                        
                                        <div class="col-lg-4 text-left">
                                            <div class="form-tambah">
                                                <a >Telepon</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                            <input  type="text" id="ubahtelepon" name="ubahtelepon" placeholder="Masukan Nomor Telepon Puskesmas"  class="required form-control form-input" >
                                            
                                        </div>
                                    </div>
                                    <div class="row form-space">
                                        
                                        <div class="col-lg-4 text-left">
                                            <div class="form-tambah">
                                                <a >Email</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                            <input  type="text" id="ubahemail" name="ubahemail" placeholder="Masukan Email Puskesmas"  class="required form-control form-input" >
                                            
                                        </div>
                                    </div>
                                     <div class="row form-space">
                                        
                                        <div class="col-lg-4 text-left">
                                            <div class="form-tambah">
                                                <a >Alamat</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                            <input  type="text" id="ubahalamat" name="ubahalamat" placeholder="Masukan Alamat Puskesmas"  class="required form-control form-input" >
                                            
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
                    <form id="editdata" method="" action="">
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
                                        <a >Nama Puskesmas</a>
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
                                        <a >Penanggung Jawab</a>
                                    </div>
                                </div>
                                <div class="col-md-1 text-left form-detail-sep" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >:</a>
                                    </div>
                                </div>
                                <div class="col-lg-9 text-left form-detail" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a id="detailpj" ></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-space-detail" >
                                <div class="col-md-2 text-left form-detail-name" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >Wilayah Pelayanan</a>
                                    </div>
                                </div>
                                <div class="col-md-1 text-left form-detail-sep" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >:</a>
                                    </div>
                                </div>
                                <div class="col-lg-9 text-left form-detail" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a id="detailwilayah" ></a>
                                    </div>
                                </div>
                            </div>
                             <div class="row form-space-detail" >
                                <div class="col-md-2 text-left form-detail-name" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >Jenis Pelayanan</a>
                                    </div>
                                </div>
                                <div class="col-md-1 text-left form-detail-sep" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >:</a>
                                    </div>
                                </div>
                                <div class="col-lg-9 text-left form-detail" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a id="detailpelayanan" ></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-space-detail" >
                                <div class="col-md-2 text-left form-detail-name" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >Telepon</a>
                                    </div>
                                </div>
                                <div class="col-md-1 text-left form-detail-sep" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >:</a>
                                    </div>
                                </div>
                                <div class="col-lg-9 text-left form-detail" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a id="detailtelepon" ></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-space-detail" >
                                <div class="col-md-2 text-left form-detail-name" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >Email</a>
                                    </div>
                                </div>
                                <div class="col-md-1 text-left form-detail-sep" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >:</a>
                                    </div>
                                </div>
                                <div class="col-lg-9 text-left form-detail" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a id="detailemail" ></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-space-detail" >
                                <div class="col-md-2 text-left form-detail-name" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >Alamat</a>
                                    </div>
                                </div>
                                <div class="col-md-1 text-left form-detail-sep" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >:</a>
                                    </div>
                                </div>
                                <div class="col-lg-9 text-left form-detail" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a id="detailalamat" ></a>
                                    </div>
                                </div>
                            </div>
                             <div class="row form-space">
                                        <div class="col-lg-11 text-left">
                                            <div class="form-tambah">
                                                <p class="form-tittle"style="padding-top: 8px;color:#03bbd3!important;border-bottom: 0px solid #e5e5e5!important;"> Data Akses </p>
                                            </div>
                                        </div>
                                    </div>

                            <div class="row form-space-detail" >
                                <div class="col-md-2 text-left form-detail-name" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >Username</a>
                                    </div>
                                </div>
                                <div class="col-md-1 text-left form-detail-sep" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >:</a>
                                    </div>
                                </div>
                                <div class="col-lg-9 text-left form-detail" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a id="detailusername" ></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-space-detail" >
                                <div class="col-md-2 text-left form-detail-name" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >Password</a>
                                    </div>
                                </div>
                                <div class="col-md-1 text-left form-detail-sep" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >:</a>
                                    </div>
                                </div>
                                <div class="col-lg-9 text-left form-detail" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a id="detailpassword" ></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-space-detail" >
                                <div class="col-md-2 text-left form-detail-name" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >Hak Akses</a>
                                    </div>
                                </div>
                                <div class="col-md-1 text-left form-detail-sep" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >:</a>
                                    </div>
                                </div>
                                <div class="col-lg-9 text-left form-detail" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a id="detailhakaskes" ></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-space-detail" >
                                <div class="col-md-2 text-left form-detail-name" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >Tgl. Akses Terakhir</a>
                                    </div>
                                </div>
                                <div class="col-md-1 text-left form-detail-sep" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >:</a>
                                    </div>
                                </div>
                                <div class="col-lg-9 text-left form-detail" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a id="detailakses" ></a>
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
                    <form  method="POST" action="action/Hapus/HapusPuskesmas.php">
                        <div class="modal-header">
                            <a class="modal-title" id="largeModalLabel">Hapus Data Puskesmas</a>
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
                                <input  type="text" id="deleteid" name="deleteid" placeholder="Masukan Nomor Handphone" class="did required form-control form-input" hidden >
                                
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
              
              var table=$('#bootstrap-data-table').DataTable({
                
                "serverSide": true,
                "ajax": "action/server-side.php",
                "columnDefs": [ {
                     "targets": -1,
                     "data": null,

                     "defaultContent": "<button type='button' class='detaildata' data-toggle='modal' data-target='#largeModal1' data-info=''>Detail</button><button type='button' class='editdata' data-toggle='modal' data-target='#largeModal' data-info=''>Ubah</button><button type='button' class='deletedata' data-toggle='modal' data-target='#deletedata' data-info=''>Hapus</button>"},
                    {
                        "targets": [ 0 ],
                        "visible": false
                                
                    },
                    {
                        "targets": [ 3 ],
                        "visible": false
                                
                    },
                    {
                        "targets": [ 4 ],
                        "visible": false
                                
                    },
                     {
                        "targets": [ 5 ],
                        "visible": false
                                
                    },
                    {
                        "targets": [ 6 ],
                        "visible": false
                                
                    },
                    {
                        "targets": [ 7 ],
                        "visible": false
                                
                    },
                    {
                        "targets": [ 10 ],
                        "visible": false
                                
                    },
                    {
                        "targets": [ 11 ],
                        "visible": false
                                
                    },


                    ],
                buttons: [
                                { 
                                    extend: 'excel',
                                    title: 'Data Puskesmas',
                                    exportOptions: {
                                        columns: [ 1, 2, 7 ,8,9,10,11]
                                    }
                                }
                            ], 
                "language": {
                            "paginate": {    
                                        "next":       "Selanjutnya"
                                        }
                            },                
                
                initComplete: function () { 
                this.api().column( 8 ).every( function () {
                var column = this;
                var select = $('<select class="form-control btn btn-primary placeholder "><option value="">Kecamatan</option><option value="">Semua</option></select>')
                    .appendTo( $('#filterarea').empty() )
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
                this.api().column( 4 ).every( function () {

                var column = this;

                var select = $('<select class="form-control btn btn-primary placeholder  "><option value="">Pilih Level</option><option value="">Semua</option></select>')
                    .appendTo( $('#filterlevel').empty() )
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
                    $('#filterarea select').niceSelect();
                    $('#filterlevel select').niceSelect();   
                    }

              });
              $('#bootstrap-data-table tbody').on( 'click', '.editdata', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    $('#ubahlabel').text(data[1]);
                    $('#ubahid').val(data[0]);
                    $('#ubahnama').val(data[1]);
                    $('#ubahpj').val(data[2]);
                    $('#ubahusername').val(data[3]);
                    $('#ubahpassword').val(data[4]);
                    $('#ubahlevel').val(data[5]);
                    $('#ubahpelayanan').find(':selected').val(data[6]).text(data[6]);
                    $('#ubahemail').val(data[7]);
                    $('#ubaharea').find(':selected').val(data[8]).text(data[8]);
                    $('#ubahtelepon').val(data[9]);
                    $('#ubahalamat').val(data[10]);
                    });
              var months = ['January','February','March','April','May','June','July','August','September','October','November','December'];
              $('#bootstrap-data-table tbody').on( 'click', '.detaildata', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    
                    $('#detaillabel').text(data[1]);
                    $('#detailnama').text(data[1]);
                    $('#detailpj').text(data[2]);
                    $('#detailusername').text(data[3]);
                    $('#detailpassword').text(data[4]);
                    $('#detailhakaskes').text(data[5]);
                    $('#detailpelayanan').text(data[6]);
                    $('#detailemail').text(data[7]);
                    $('#detailwilayah').text(data[8]);
                    $('#detailtelepon').text(data[9]);
                    $('#detailalamat').text(data[10]);
                    var datevisit = new Date(data[11]);
                    $('#detailakses').text( ("0" +datevisit.getDate()).slice(-2) + ' ' + months[datevisit.getMonth()] + ' ' + datevisit.getFullYear() );
                 
                    });
               $('#bootstrap-data-table tbody').on( 'click', '.deletedata', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    $('#deleteid').val(data[0]);
                    $('#deletenama').text(data[1]);
                    
                    });
              $('input.global_filter').on( 'keyup click', function () {
                             $('#bootstrap-data-table').DataTable().search(
                                $('#global_filter').val(),
                            ).draw();
                            } );
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
                    nama: { required: true },
                    pj: { required: true },
                    username: { required: true },
                    password: { required: true },
                    email: { required: true,email:true },
                    telepon: { required: true,number:true },
                    alamat: { required: true },
                    pelayanan: { required: true },
                    area: { required: true }
                    },
            messages: {
                    nama: {required: "Nama Puskesmas tidak boleh kosong!"},
                    pj: {required: "Nama Penanggung Puskesmas Jawab tidak boleh kosong!"},
                    username: { required: "Username Puskesmas tidak boleh kosong!" },
                    password: { required: "Password Puskesmas tidak boleh kosong!" },
                    email: { required: "Email Puskesmas tidak boleh kosong!",email:"Tolong Masukan format dengan benar!"},
                    telepon: { required: "Nomor Telepon Puskesmas tidak boleh kosong!",number:"Masukan hanya Angka Saja (1-9,etc)!" },
                    alamat: { required: "Alamat Puskesmas tidak boleh kosong!" },
                    pelayanan: { required: "Jenis Pelayanan Puskesmas tidak boleh kosong!" },
                    area: { required: "Area Puskesmas tidak boleh kosong!" }
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
                    ubahnama: { required: true },
                    ubahpj: { required: true },
                    ubahusername: { required: true },
                    ubahpassword: { required: true },
                    ubahemail: { required: true,email:true },
                    ubahtelepon: { required: true,number:true },
                    ubahalamat: { required: true },
                    ubahpelayanan: { required: true },
                    ubaharea: { required: true }
                    },
            messages: {
                    ubahnama: {required: "Nama Puskesmas tidak boleh kosong!"},
                    ubahpj: {required: "Nama Penanggung Puskesmas Jawab tidak boleh kosong!"},
                    ubahusername: { required: "Username Puskesmas tidak boleh kosong!" },
                    ubahpassword: { required: "Password Puskesmas tidak boleh kosong!" },
                    ubahemail: { required: "Email Puskesmas tidak boleh kosong!",email:"Tolong Masukan format dengan benar!"},
                    ubahtelepon: { required: "Nomor Telepon Puskesmas tidak boleh kosong!",number:"Masukan hanya Angka Saja (1-9,etc)!" },
                    ubahalamat: { required: "Alamat Puskesmas tidak boleh kosong!" },
                    ubahpelayanan: { required: "Jenis Pelayanan Puskesmas tidak boleh kosong!" },
                    ubaharea: { required: "Area Puskesmas tidak boleh kosong!" }
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
     
    




<div id="container">
  
 
  
</div>



</body>
</html>
