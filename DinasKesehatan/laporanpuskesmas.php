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
                <div class="col-lg-4 col-md-4">
                    <h3 style="color:#8c8e8d;"><b>Laporan Puskesmas</b></h3>
                </div>

                <div class="col-lg-8 col-md-8">
                    <div class="row">
                        <div class="col-lg-3" style="padding-left: 0px;max-width: 24.5%;">
                            <div class="input-group">
                                    <div class="input-group">
                                    <div class="input-group-btn" style="-webkit-box-shadow: 0 4px 8px   rgba(0, 0, 0, 0.20);box-shadow: 0 4px 8px  rgba(0, 0, 0, 0.20);">
                                        <div class="btn-group" >
                                            <div id="filterBulan">
                                            </div>
                                            </div>
                                        </div>      
                                    </div>
                                </div>
                                
                            
                        </div>
                         <div class="col-lg-3" style="padding-left: 0px;max-width: 24.5%;" >
                            <div class="input-group">
                                    <div class="input-group">
                                    <div class="input-group-btn" style="-webkit-box-shadow: 0 4px 8px   rgba(0, 0, 0, 0.20);box-shadow: 0 4px 8px  rgba(0, 0, 0, 0.20);">
                                        <div class="btn-group" >
                                            <div id="filterTahun">
                                            </div>
                                            </div>
                                        </div>      
                                    </div>
                                </div>
                                
                            
                        </div>
                        <div class="col-lg-3" style="padding-left: 0px;max-width: 24.5%;">
                            <div class="input-group">
                                    <div class="input-group">
                                    <div class="input-group-btn" style="-webkit-box-shadow: 0 4px 8px   rgba(0, 0, 0, 0.20);box-shadow: 0 4px 8px  rgba(0, 0, 0, 0.20);">
                                        <div class="btn-group" >
                                            <div id="filterPuskesmas">
                                            </div>
                                            </div>
                                        </div>      
                                    </div>
                                </div>
                                
                            
                        </div>
                        
                        <div class="col-lg-3" style="padding-left: 0px;max-width: 24.5%;">
                            
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
                                            <th></th>
                                            <th></th>
                                            <th>Kode</th>
                                            <th>Nama Puskesmas</th>
                                            <th>Bulan</th>
                                            <th>Tahun</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>Tanggal Selesai</th>
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

                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                     
                </div><!-- /# column -->
            </div>
            <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <form id="tambahdata" method="POST" action="action/Tambah/TambahLaporan.php">
                    
                        <div class="modal-header">
                            <a class="modal-title" id="mediumModalLabel">Buat Laporan Bulanan </a>
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
                                                <p class="form-tittle"> Laporan </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-space">
                                        <div class="col-lg-3 text-left">
                                            <div class="form-tambah">
                                                <a>Periode</a>
                                            </div>
                                        </div>
                                        <div  class="col-lg-5 text-left">
                                            <div class="col-lg-5 text-left">
                                            <input  type="text" id="periode" autocomplete="off" name="periode" placeholder="Pilih tanggal" class="required monthyear form-control form-input" >  
                                        </div>  
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="col-lg-6">
                                    <div class="row form-space">
                                        <div class="col-lg-11 text-left">
                                            <div class="form-tambah">
                                                <p class="form-tittle">Permintaan Pelaporan</p>
                                            </div>
                                        </div>
                                       
                                    </div>
                                     <div class="row form-space">
                                        <div class="col-lg-4 text-left">
                                            <div class="form-tambah">
                                                <a >Tanggal Mulai</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                            <input  type="text" id="tanggalmulai" autocomplete="off" name="tanggalmulai" placeholder="Pilih tanggal" class="required tanggal form-control form-input" >
                                        </div>
                                    </div>
                                    <div class="row form-space">
                                        <div class="col-lg-4 text-left">
                                            <div class="form-tambah">
                                                <a >Batas Waktu</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                             <input  type="text" id="bataswaktu" autocomplete="off" name="bataswaktu" placeholder="Pilih tanggal" class="required tanggal form-control form-input" >
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
                        <table id="detail-table" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                            <th style="line-height: 120px;" rowspan="4">No</th>
                                            <th style="line-height: 120px;" rowspan="4">ICD_X</th>
                                            <th style="line-height: 120px;" rowspan="4">Jenis Penyakit</th>                      
                                            <th colspan="28">Jenis Penderita</th>
                                            
                                        </tr>
                                        <tr>
                                            <th colspan="4">15-19 th</th>
                                            <th colspan="4">20-44 th</th>
                                            <th colspan="4">45-54 th</th>
                                            <th colspan="4">55-58 th</th>
                                            <th colspan="4">60-69 th</th>
                                            <th colspan="4">>70 th</th>
                                            <th colspan="4">Total</th>                                           
                                        </tr>
                                        <tr>
                                            <th colspan="2">Baru</th>
                                            <th colspan="2">Lama</th>
                                            <th colspan="2">Baru</th>
                                            <th colspan="2">Lama</th>
                                            <th colspan="2">Baru</th>
                                            <th colspan="2">Lama</th>
                                            <th colspan="2">Baru</th>
                                            <th colspan="2">Lama</th>
                                            <th colspan="2">Baru</th>
                                            <th colspan="2">Lama</th>
                                            <th colspan="2">Baru</th>
                                            <th colspan="2">Lama</th>
                                            <th colspan="2">Baru</th>
                                            <th colspan="2">Lama</th>                
                                        </tr>
                                        <tr>
                                            <th>L</th>
                                            <th>P</th>
                                            <th>L</th>
                                            <th>P</th>
                                            <th>L</th>
                                            <th>P</th>
                                            <th>L</th>
                                            <th>P</th>
                                            <th>L</th>
                                            <th>P</th>
                                            <th>L</th>
                                            <th>P</th>
                                            <th>L</th>
                                            <th>P</th>
                                            <th>L</th>
                                            <th>P</th>
                                            <th>L</th>
                                            <th>P</th>
                                            <th>L</th>
                                            <th>P</th>
                                            <th>L</th>
                                            <th>P</th>
                                            <th>L</th>
                                            <th>P</th>
                                            <th>L</th>
                                            <th>P</th>
                                            <th>L</th>
                                            <th>P</th>
                                        </tr>

                                    </thead>
                                    <tbody id="list-table">
                                        

                                    </tbody>
                                    
                                </table>
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
            <div class="modal fade" id="unduhdata" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" style="margin: auto 35rem;" >
                    <div class="modal-content" style="width: 650px;">
                        <div class="modal-header">
                            <a class="modal-title" id="largeModalLabel">Unduh</a>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                         <div class="modal-body" >
                            <div class="row form-space">
                                <div class="col-lg-6 text-center">
                                <a href='action/Unduh/UnduhLaporanPuskesmas.php?code=' id='pdf' class='unduhdata'><button type='button' class='PDF' data-toggle='modal' data-info=''>PDF</button></a>
                                </div>
                                <div class="col-lg-6 text-center">
                                <a href='action/Unduh/UnduhLaporanPuskesmas-xls.php?code=' id='excel' class='unduhdata'><button type='button' class='Excel' data-toggle='modal' data-info=''>Excel</button></a>
                                </div>                            
                            </div>
                        </div>
                        <div class="modal-footer">
                           
                            

                        </div>
                    
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
                <?php include('action/reportpuskesmas_clientside.php'); ?>                
                ];
              var table=$('#bootstrap-data-table').DataTable({
                data:dataSet,
                // "serverSide": true,
                // "ajax": "action/pasien_serverside.php",
                "columnDefs": [ {
                     "targets": -1,
                     "data": null,
                    render:function(data, type, row)
                    {
                        return  "<button type='button' class='editdata' data-target='#unduhdata' data-toggle='modal' data-info=''>Unduh</button><button type='button' class='detaildata' data-toggle='modal' data-target='#largeModal1' data-info=''>Detail</button>";}
                    },
                    {
                        "targets": [ 0 ],
                        "visible": false
                                
                    },
                    {
                        "targets": [ 1 ],
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
                        "targets": [ 8 ],
                        "visible": false
                                
                    },
                    {
                        "targets": [ 9 ],
                        "visible": false
                                
                    },
                     
                    
                 

                    ],

                buttons: [
                                { 
                                    extend: 'excel',
                                    title: 'Estu SAE - Data Supplier',
                                    exportOptions: {
                                        columns: [ 1, 2, 3 ,4,]
                                    }
                                }
                            ], 
                "order": [[ 0, "desc" ]],
                "language": {
                            "paginate": {    
                                        "next":       "Selanjutnya"
                                        }
                            },
                "fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                if(aData[8] === "Proses"){
                     $("td:nth-child(5)",nRow).css({"color":"#eb5757","font-weight":"900"});
                }else if(aData[8] === "Selesai"){
                     $("td:nth-child(5)",nRow).css({"color":"#03bbd3","font-weight":"900"});
                }else{
                    $("td:nth-child(5)",nRow).css({"color":"#8c8e8d","font-weight":"900"});
                }
                    return nRow;
                
                },                
                initComplete: function () { 
                    this.api().column( 3 ).every( function () {
                var column = this;
                var select = $('<select class="form-control btn btn-primary placeholder "><option value="">Puskesmas</option><option value="">Semua</option></select>')
                    .appendTo( $('#filterPuskesmas').empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
                        column.search( this.value ).draw();
                    } );
                    
                            column.data().unique().sort().each( function ( d, j ) {
                                select.append( '<option  value="'+d+'">'+d.substr(9,20)+'</option>' )
                            } );
                        } );
                this.api().column( 5 ).every( function () {
                var column = this;
                var select = $('<select class="form-control btn btn-primary placeholder "><option value="">Tahun</option><option value="">Semua</option></select>')
                    .appendTo( $('#filterTahun').empty() )
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

                var select = $('<select  class="form-control btn btn-primary placeholder "><option value="">Bulan</option><option value="">Semua</option></select>')
                    .appendTo( $('#filterBulan').empty() )
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
                    $('#filterPuskesmas select').niceSelect(); 
                    $('#filterTahun select').niceSelect();
                    $('#filterBulan select').niceSelect();   
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
                    $('#ubahdiagnosa').find(':selected').val(data[5]).text(data[5]);
                    var datevisit = new Date(data[6]);
                    $('#ubahtanggalkunjungan').val( ("0" +datevisit.getDate()).slice(-2) + ' ' + months[datevisit.getMonth()] + ' ' + datevisit.getFullYear() );
                    $('#ubahjeniskelamin').find(':selected').val(data[7]).text(data[7]);
                    });
              $('#bootstrap-data-table tbody').on( 'click', '.detaildata', function () {
                var kode = table.row( $(this).parents('tr') ).data();
                    $.ajax({
                        url: "action/Detail/DetailLaporanPuskesmas.php",
                        dataType: 'json',
                        type: 'GET',
                        cache:false,
                        data: {
                            code: kode[0]
                        },
                        success: function(data){
                            /*console.log(data);*/
                            var event_data = '';
                            $.each(data, function(index, value){
                                /*console.log(value);*/
                                event_data += '<tr>';
                                event_data += '<td>'+value.nomor+'</td>';
                                event_data += '<td>'+value.icd_x+'</td>';
                                event_data += '<td>'+value.dis+'</td>';
                                event_data += '<td>'+value.BL1519+'</td>';
                                event_data += '<td>'+value.BP1519+'</td>';
                                event_data += '<td>'+value.LL1519+'</td>';
                                event_data += '<td>'+value.LP1519+'</td>';
                                event_data += '<td>'+value.BL2044+'</td>';
                                event_data += '<td>'+value.BP2044+'</td>';
                                event_data += '<td>'+value.LL2044+'</td>';
                                event_data += '<td>'+value.LP2044+'</td>';
                                event_data += '<td>'+value.BL4554+'</td>';
                                event_data += '<td>'+value.BP4554+'</td>';
                                event_data += '<td>'+value.LL4554+'</td>';
                                event_data += '<td>'+value.LP4554+'</td>';
                                event_data += '<td>'+value.BL5558+'</td>';
                                event_data += '<td>'+value.BP5558+'</td>';
                                event_data += '<td>'+value.LL5558+'</td>';
                                event_data += '<td>'+value.LP5558+'</td>';
                                event_data += '<td>'+value.BL6069+'</td>';
                                event_data += '<td>'+value.BP6069+'</td>';
                                event_data += '<td>'+value.LL6069+'</td>';
                                event_data += '<td>'+value.LP6069+'</td>';
                                event_data += '<td>'+value.BLU70+'</td>';
                                event_data += '<td>'+value.BPU70+'</td>';
                                event_data += '<td>'+value.LLU70+'</td>';
                                event_data += '<td>'+value.LPU70+'</td>';
                                event_data += '<td>'+value.TBL+'</td>';
                                event_data += '<td>'+value.TBP+'</td>';
                                event_data += '<td>'+value.TLL+'</td>';
                                event_data += '<td>'+value.TLP+'</td>';
                                event_data += '</tr>';
                            });
                            $("#list-table").append(event_data);
                        },
                        error: function(d){
                            /*console.log("error");*/
                            alert("404. Please wait until the File is Loaded.");
                        }
                    });
                    });
                    $('#bootstrap-data-table tbody').on( 'click', '.editdata', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    document.getElementById("pdf").href="action/Unduh/UnduhLaporanPuskesmas.php?code="+data[0];
                    document.getElementById("excel").href="action/Unduh/UnduhLaporanPuskesmas-xls.php?code="+data[0];
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
            $('#largeModal1').on('hidden.bs.modal', function () {
                $("#list-table").empty();
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
                var dateprosses = $(".tanggal").datepicker({
                format: "dd MM yyyy",
                autoclose:true
                });
                var datePicker = $(".monthyear").datepicker({
                    format: "MM yyyy",
                    viewMode: "months", 
                    minViewMode: "months",
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
