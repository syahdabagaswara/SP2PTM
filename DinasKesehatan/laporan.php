
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
                <div class="col-lg-5 col-md-4">
                    <h3 style="color:#8c8e8d;"><b>Jadwal Pelaporan</b></h3>
                </div>

                <div class="col-lg-7 col-md-8">
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
                            
                                <div id ="filter_global" class="input-group" style="-webkit-box-shadow: 0 4px 8px   rgba(0, 0, 0, 0.20);box-shadow: 0 4px 8px  rgba(0, 0, 0, 0.20);">
                                    <input id="global_filter" name="x_card_code" type="text" class="form-control global_filter cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" autocomplete="off" placeholder="Cari">
                                    

                                        <div class="input-group-addon">
                                            <span class="fa fa-search fa-sm" data-toggle="popover" data-container="body" data-html="true" data-title="Security Code"
                                                            data-content="<div class='text-center one-card'>The 3 digit code on back of the card..<div class='visa-mc-cvc-preview'></div></div>"
                                                            data-trigger="hover"></span>
                                         </div>
                                </div>
                            
                        </div>
                         <div class="col-lg-3" style="padding-left: 0px;max-width: 24.5%;">
                           <div class="input-group-btn text-right">
                                        <button class="btn btn-secondary" style="-webkit-box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);" data-toggle="modal" data-target="#mediumModal">
                                            <i class="fa fa-plus fa-lg"></i> <a class="tambah">Tambah </a>
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
                        $month=$_GET['month'];
                        echo "<div class='row'><div class='col-lg-12'><div class='card' style='margin-bottom: 20px;'><div class='card-body dataerror' style='padding:10px;'>Gagal menambah Jadwal Pelaporan. Laporan Bulan ".$month." sudah ada .</div></div></div></div>";
                    }
                }else if(isset($_GET['datereport'])){
                    if($_GET['datereport']=="error"){
                        echo "<div class='row'><div class='col-lg-12'><div class='card' style='margin-bottom: 20px;'><div class='card-body dataerror' style='padding:10px;'>Gagal menambah Jadwal Pelaporan. Tanggal Mulai dan Batas Waktu tidak diperbolehkan kurang dari Periode Bulan dan Tahun!.</div></div></div></div>";
                    }
                }else if(isset($_GET['daterequest'])){
                    if($_GET['daterequest']=="error"){
                        echo "<div class='row'><div class='col-lg-12'><div class='card' style='margin-bottom: 20px;'><div class='card-body dataerror' style='padding:10px;'>Gagal menambah Jadwal Pelaporan. Batas Waktu tidak diperbolehkan kurang dari Tanggal Mulai!.</div></div></div></div>";
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
                                            <th></th>
                                            <th></th>                                          
                                            <th colspan="2">Periode</th>
                                            <th colspan="4">Jadwal Pengumpulan Pelaporan</th>
                                            <th></th>
                                            <th>Batas Akhir</th>
                                            <th></th>
                                            <th  style="line-height: 50px;"rowspan="2">Aksi</th>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>                                          
                                            <th>Bulan</th>
                                            <th>Tahun</th>
                                            <th>Mulai </th>
                                            <th>FKTP</th>
                                            <th>Puskesmas</th>
                                            <th>Batas Akhir</th>
                                            <th>Status</th>
                                            <th></th>
                                            <th></th>
                                            
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
                                                <p class="form-tittle">Jadwal Pelaporan</p>
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
                                                <a >Batas FKTP</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                             <input  type="text" id="bataswaktufktp" autocomplete="off" name="bataswaktufktp" placeholder="Pilih tanggal" class="required tanggal form-control form-input" >
                                        </div>
                                    </div>
                                    <div class="row form-space">
                                        <div class="col-lg-4 text-left">
                                            <div class="form-tambah">
                                                <a >Batas Puskesmas</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                             <input  type="text" id="bataswaktups" autocomplete="off" name="bataswaktups" placeholder="Pilih tanggal" class="required tanggal form-control form-input" >
                                        </div>
                                    </div>
                                    <div class="row form-space">
                                        <div class="col-lg-4 text-left">
                                            <div class="form-tambah">
                                                <a >Batas Pengumpulan</a>
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
                    <form id="editdata" method="POST" action="action/Ubah/UbahLaporan.php">
                        <div class="modal-header">
                            <a class="modal-title" id="largeModalLabel">Ubah Laporan <b id="ubahlabel"></b> <b id="ubahbulan"> </b> <b id="ubahtahun"></b> </a>
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
                                    <div class="row form-space" hidden>
                                        <div class="col-lg-3 text-left">
                                            <div class="form-tambah">
                                              
                                            </div>
                                        </div>
                                        <div  class="col-lg-5 text-left">
                                            <div class="col-lg-5 text-left">
                                            <input  type="text" id="ubahid" autocomplete="off" name="ubahid" placeholder="Pilih tanggal" class="required form-control form-input" >  
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
                                            <input  type="text" id="ubahperiode" autocomplete="off" name="ubahperiode" placeholder="Pilih tanggal" class="required form-control form-input" readonly>  
                                        </div>  
                                        </div>
                                    </div>
                                   
                                </div>
                               <div class="col-lg-6">
                                    <div class="row form-space">
                                        <div class="col-lg-11 text-left">
                                            <div class="form-tambah">
                                                <p class="form-tittle">Jadwal Pelaporan</p>
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
                                            <input  type="text" id="ubahtanggalmulai" autocomplete="off" name="ubahtanggalmulai" placeholder="Pilih tanggal" class="required tanggal form-control form-input" >
                                        </div>
                                    </div>
                                    <div class="row form-space">
                                        <div class="col-lg-4 text-left">
                                            <div class="form-tambah">
                                                <a >Batas FKTP</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                             <input  type="text" id="ubahbataswaktufktp" autocomplete="off" name="ubahbataswaktufktp" placeholder="Pilih tanggal" class="required tanggal form-control form-input" >
                                        </div>
                                    </div>
                                    <div class="row form-space">
                                        <div class="col-lg-4 text-left">
                                            <div class="form-tambah">
                                                <a >Batas Puskesmas</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                             <input  type="text" id="ubahbataswaktups" autocomplete="off" name="ubahbataswaktups" placeholder="Pilih tanggal" class="required tanggal form-control form-input" >
                                        </div>
                                    </div>
                                    <div class="row form-space">
                                        <div class="col-lg-4 text-left">
                                            <div class="form-tambah">
                                                <a >Batas Waktu</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                             <input  type="text" id="ubahbataswaktu" autocomplete="off" name="ubahbataswaktu" placeholder="Pilih tanggal" class="required tanggal form-control form-input" >
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
            
            <div class="modal fade" id="deletedata" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" style="margin: auto 25rem;" >
                    <div class="modal-content" style="width: 700px;">
                    <form id="" method="POST" action="action/Hapus/HapusLaporan.php">
                        <div class="modal-header">
                            <a class="modal-title" id="largeModalLabel">Hapus Data Laporan </a>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                         <div class="modal-body" >
                            <div class="row form-space">
                                
                                <div class="col-lg-12 text-left">
                                    <div class="form-tambah">
                                        <a >Semua data laporan Puskesmas dan FKTP akan ikut terhapus, </a></br><a>Apakah Anda yakin menghapus semua data laporan pada Bulan </a><a style="color:#eb5757!important;font-size: 16px; " id="deletebulan"></a> <a style="color:#eb5757!important;font-size: 16px;" id="deletetahun"></a><a>?</a>
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
                <?php include('action/reportschedule_clientside.php'); ?>                
                ];
              var table=$('#bootstrap-data-table').DataTable({
                data:dataSet,
                // "serverSide": true,
                // "ajax": "action/pasien_serverside.php",
                "columnDefs": [ {
                     "targets": -1,
                     "data": null,

                     "defaultContent": "<button type='button' class='editdata' data-toggle='modal' data-target='#largeModal' data-info=''>Ubah</button><button type='button' class='deletedata' data-toggle='modal' data-target='#deletedata' data-info=''>Hapus</button>"},
                    {
                        "targets": [ 0 ],
                        "visible": false
                                
                    },
                    {
                        "targets": [ 1 ],
                        "visible": false
                                
                    },
                    {
                        "targets": [ 2 ],
                        "visible": false
                                
                    },

                    
                    
                    {
                        "targets": [ 3 ],
                        "visible": false
                                
                    },
                     {
                        "targets": [ 10 ],
                        "visible": false
                                
                    },
                    
                    {
                        "targets": [ 11],
                        "visible": false
                                
                    },
                    {
                        "targets": [ 12],
                        "visible": false
                                
                    },
            
                     
                    
                 

                    ],

                buttons: [
                                { 
                                    extend: 'excel',
                                    title: 'Jadwal Pelaporan P2PTM',
                                    exportOptions: {
                                        columns: [ ]
                                    }
                                }
                            ], 
                "order": [[ 0, "desc" ]],
                "language": {
                            "paginate": {    
                                        "next":       "Selanjutnya"
                                        }
                            },               
                initComplete: function () { 
                    
                this.api().column( 5).every( function () {
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
                    $('#ubahbulan').text(data[4]);
                    $('#ubahtahun').text(data[5]);
                    var date = new Date(data[12]);
                    $('#ubahperiode').val(  months[date.getMonth()] + ' ' + date.getFullYear() );
                    var datevisit = new Date(data[6]);
                    $('#ubahtanggalmulai').val( ("0" +datevisit.getDate()).slice(-2) + ' ' + months[datevisit.getMonth()] + ' ' + datevisit.getFullYear() );
                    var datevisit = new Date(data[7]);
                    $('#ubahbataswaktufktp').val( ("0" +datevisit.getDate()).slice(-2) + ' ' + months[datevisit.getMonth()] + ' ' + datevisit.getFullYear() );
                    var datevisit = new Date(data[8]);
                    $('#ubahbataswaktups').val( ("0" +datevisit.getDate()).slice(-2) + ' ' + months[datevisit.getMonth()] + ' ' + datevisit.getFullYear() );
                    var datevisit = new Date(data[9]);
                    $('#ubahbataswaktu').val( ("0" +datevisit.getDate()).slice(-2) + ' ' + months[datevisit.getMonth()] + ' ' + datevisit.getFullYear() );
                    
                    });
               $('#bootstrap-data-table tbody').on( 'click', '.deletedata', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    $('#deleteid').val(data[0]);
                    $('#deletebulan').text(data[4]);
                    $('#deletetahun').text(data[5]);
                    
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
            $.validator.addMethod(
                "uDate",
                function(value, element) {
                    // put your own logic here, this is just a (crappy) example
                    return value.match(/^\d{2} \b(?:Jan(?:uary)?|Feb(?:ruary)?|Mar(?:ch)?|Apr(?:il)?|May(?:)?|Jun(?:e)?|Jul(?:y)?|Aug(?:ust)?|Sep(?:tember)?|Oct(?:ober)?|Nov(?:ember)?|Dec(?:ember)?) \d{4}$/);
                },
                "Please enter a date in the format dd/mm/yyyy."
            );
             $.validator.addMethod(
                "mDate",
                function(value, element) {
                    // put your own logic here, this is just a (crappy) example
                    return value.match(/\b(?:Jan(?:uary)?|Feb(?:ruary)?|Mar(?:ch)?|Apr(?:il)?|May(?:)?|Jun(?:e)?|Jul(?:y)?|Aug(?:ust)?|Sep(?:tember)?|Oct(?:ober)?|Nov(?:ember)?|Dec(?:ember)?) (?:19[7-9]\d|2\d{3})(?=\D|$)/);
                },
                "Please enter a date in the format dd/mm/yyyy."
            );
            $('#tambahdata').validate({
             ignore: [],
            rules: {
                    periode: { required: true,mDate:true },
                    tanggalmulai: { required: true,uDate:true },
                    bataswaktufktp: { required: true,uDate:true },
                    bataswaktups: { required: true,uDate:true },
                    bataswaktu: { required: true,uDate:true },
                    diagnosa: { required: true }
                    },
            messages: {
                    periode: {required:"Periode Laporan Kosong!",mDate:"Masukan Periode dengan bulan dan tahun!"},
                    tanggalmulai: {required: "Tanggal Mulai Kosong! ",uDate:"Masukan format tanggal dengan benar!"},
                    bataswaktufktp: { required: "Batas Pengumpulan FKTP kosong!",uDate:"Masukan format tanggal dengan benar!" },
                    bataswaktups: { required: "Batas Pengumpulan Puskesmas kosong!",uDate:"Masukan format tanggal dengan benar!" },
                    bataswaktu: { required: "Batas Pengumpulan kosong!",uDate:"Masukan format tanggal dengan benar!"},
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
                    ubahperiode: { required: true,mDate:true },
                    ubahtanggalmulai: { required: true,uDate:true },
                    ubahbataswaktufktp: { required: true,uDate:true },
                    ubahbataswaktups: { required: true,uDate:true },
                    ubahbataswaktu: { required: true,uDate:true },
                    diagnosa: { required: true }
                    },
            messages: {
                    ubahperiode: {required:"Periode Laporan Kosong!",mDate:"Masukan Periode dengan bulan dan tahun!"},
                    ubahtanggalmulai: {required: "Tanggal Mulai Kosong! ",uDate:"Masukan format tanggal dengan benar!"},
                    ubahbataswaktufktp: { required: "Batas Pengumpulan FKTP kosong!",uDate:"Masukan format tanggal dengan benar!" },
                    ubahbataswaktups: { required: "Batas Pengumpulan Puskesmas kosong!",uDate:"Masukan format tanggal dengan benar!" },
                    ubahbataswaktu: { required: "Batas Pengumpulan kosong!",uDate:"Masukan format tanggal dengan benar!"},
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
                
                
                var datePicker = $(".monthyear").datepicker({
                    format: "MM yyyy",
                    viewMode: "months", 
                    minViewMode: "months",
                autoclose:true});
                var datepicker = $(".tanggal").datepicker({
                format: "dd MM yyyy",
                autoclose:true
                });
               
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
