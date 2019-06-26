
<!Doctype html>
<html class="no-js" lang=""> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <?php include('include/style.php'); ?>
</head>
<body ">
   <?php include('include/navbar.php'); ?> 
        <div class="content pb-0">
            <!-- Widgets  -->
            <div class="row" style="margin-bottom: 30px">
                <div class="col-lg-12 col-md-6">
                    <h3 style="color:#8c8e8d;"><b>Pelaporan </b></h3>
                </div>
            </div> 
            <?php 
                if($numreportrow==0){
                    header("location:index.php");
                }
                if(isset($_GET['data'])){
                    if($_GET['data']=="duplicate"){
                        echo "<div class='row'><div class='col-lg-12'><div class='card' style='margin-bottom: 20px;'><div class='card-body dataerror' style='padding:10px;'>Gagal menambah Data Pasien. Diagnosa sama pada Tanggal Kunjungan Pasien yang sama tidak diperbolehkan!.</div></div></div></div>";
                    }else if($_GET['data']=="null"){
                        echo "<div class='row'><div class='col-lg-12'><div class='card' style='margin-bottom: 20px;'><div class='card-body dataerror' style='padding:10px;'>Gagal menambah Data Pasien. Tanggal lahir tidak diperbolehkan melebihi Tanggal Kunjungan!.</div></div></div></div>";
                    }
                    }
            ?>
            
            <?php include('action/reportmonitoring.php'); ?> 
                                     

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
                                                <option value="Diabetes Mellitus">Diabetes Mellitus</option> 
                                                <option value="Hipertensi">Hipertensi</option>                                        
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
                                                <option value="Diabetes Mellitus">Diabetes Mellitus</option> 
                                                <option value="Hipertensi">Hipertensi</option>                                        
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
                    $('#ubahdiagnosa').find(':selected').val(data[5]).text(data[5]);
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
                    nik: { required: true,number:true,minlength:14,maxlength:14 },
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
                    ubahnik: { required: true,number:true,minlength:14,maxlength:14 },
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
