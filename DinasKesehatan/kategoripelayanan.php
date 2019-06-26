
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
                <div class="col-lg-5 col-md-6">
                    <h3 style="color:#8c8e8d;"><b>Daftar Kategori Pelayanan</b></h3>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="row">
                        
                       
                        <div class="col-lg-4">
                            
                                
                            
                        </div>
                        <div class="col-lg-8">
                            
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
                                            <th>Nomor</th>
                                            <th>Kategori Pelayanan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr> 
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
                    <div class="modal-content" style="width: 600px!important;left: 300px;">
                        <form id="tambahdata" method="POST" action="action/Tambah/TambahKategori.php">
                    
                        <div class="modal-header">
                            <a class="modal-title" id="mediumModalLabel">Tambah Daftar Kategori Pelayanan</a>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12" style="border-right: 1px solid #e5e5e5;">
                                    <div class="row form-space">
                                        <div class="col-lg-4 text-left">
                                            <div class="form-tambah">
                                                <a >Kategori Pelayanan</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                            <input  type="text" id="kategori" name="kategori" placeholder="Masukan Kategori Pelayanan" class="required form-control form-input">
                                            
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
                    <div class="modal-content" style="width: 600px!important;left: 300px;">
                    <form id="editdata" method="POST" action="action/Ubah/ubahKategori.php">
                        <div class="modal-header">
                            <a class="modal-title" id="largeModalLabel">Ubah Data Kategori Pelayanan <b id="ubahlabel"></b></a>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                         <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12" style="border-right: 1px solid #e5e5e5;">
                                    
                                    <div class="row form-space">
                                        <div class="col-lg-4     text-left">
                                            <div class="form-tambah">
                                                <a >Kategori Pelayanan</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 text-left">
                                            <input  type="text" id="ubahid" name="ubahid" placeholder="" class="required form-control form-input" hidden>
                                            <input  type="text" id="ubahkategori" name="ubahkategori" placeholder="Masukan Kategori Pelayana" class="required form-control form-input">  
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
                    <form id="" method="POST" action="action/Hapus/HapusKategori.php">
                        <div class="modal-header">
                            <a class="modal-title" id="largeModalLabel">Hapus Data Kategori Pelayanan</a>
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
              
              var table=$('#bootstrap-data-table').DataTable({
                
                "serverSide": true,
                "ajax": "action/service_server-side.php",
                "columnDefs": [ {
                     "targets": -1,
                     "data": null,
                     "defaultContent": "<button type='button' class='editdata' data-toggle='modal' data-target='#largeModal' data-info=''>Ubah</button><button type='button' class='deletedata' data-toggle='modal' data-target='#deletedata' data-info=''>Hapus</button>"},
                    ],
                buttons: [
                                { 
                                    extend: 'excel',
                                    title: 'Daftar Penyakit',
                                    exportOptions: {
                                        columns: [ 1, 2]
                                    }
                                }
                            ], 
                "language": {
                            "paginate": {    
                                        "next":       "Selanjutnya"
                                        }
                            }            
              });
              $('#bootstrap-data-table tbody').on( 'click', '.editdata', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    $('#ubahlabel').text(data[1]);
                    $('#ubahid').val(data[0]);
                    $('#ubahKategori').val(data[1]);
                    });
               $('#bootstrap-data-table tbody').on( 'click', '.deletedata', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    $('#deleteid').val(data[0]);
                    $('#deletenama').text(data[2]);
                    
                    });
            $('input.global_filter').on( 'keyup click', function () {
                             $('#bootstrap-data-table').DataTable().search(
                                $('#global_filter').val(),
                            ).draw();
                            } );
            });
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
                    kategori: { required: true }
                    },
            messages: {
                    kategori: {required: "Kategori Pelayanan tidak boleh kosong!"}
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
                    kategori: { required: true }
                    },
            messages: {
                    kategori: {required: "Kategori Pelayanan tidak boleh kosong!"}
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
