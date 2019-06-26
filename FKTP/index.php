
<!Doctype html>
<html class="no-js" lang=""> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SP2PTM</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include('include/style.php'); ?> 
</head>
<body >
        <?php include('include/navbar.php');
        
        $yearold=$yearnow-1; ?> 
        <div class="content pb-0">

            <!-- Widgets  -->
            <div class="row" style="margin-bottom: 30px">
                <div class="col-lg-3 col-md-6">
                    <h3 style="color:#8c8e8d;"><b>Dashboard</b></h3>
                </div>

            </div> 
            <!-- Widgets End -->
            <?php
                echo"
                <div class='row'>
                    <div class='col-lg-12'>
                        <div class='card' style='margin-bottom: 20px;'>
                            <div class='card-body datasession' style='padding:10px;'>Anda Login Sebagai (".$_SESSION['nama'].").</div>
                        </div>
                    </div>
                </div>";
            ?>

            <div class="card">
                    <div class="card-body" style="padding-bottom:34px!important;">
                    <div class="row">
                        <div class="col-lg-12">
                                <!-- <canvas id="myChart"></canvas> -->
                                <div id="chart-container">
                                    <div class="text-center grafiktittle">
                                    <a id="tittlehead">Data Grafik total Surveilans</a ></br><a id="datahead"><?php echo $yearnow ;?></a>
                                    </div>
                                   <canvas id="mycanvas" style="height:40vh; width:80vw"></canvas>
                                   
                                </div>
                                <div style="padding-right:15px;padding-top:25px;" class="text-right">
                            <a class="btn btn-secondary text-center" style="padding-left: 11px;-webkit-box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);" href="grafikpenyakit.php" class="tambah">Detail</a>
                            </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                <div class="card">
                <div class="card-body" style="padding-bottom:34px!important;">
                <table id="tablepenyakit" class="table table-striped table-bordered">
                <?php include('action/Detail/DetailPenyakitDashboard.php');
                echo'
                                    <thead>
                                        <tr>
                                            <th style="line-height: 50px;" rowspan="2">Nama Penyakit</th>
                                            <th colspan="2">Total Penyakit</th>
                                        </tr>
                                        <tr>
                                            <th >'. $yearold.'</th>
                                            <th >'. $yearnow.'</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    ';
                                        for($i=0;$i<$numslabel;$i++){
                                        
                                            
                                            echo'
                                            <tr> 
                                            <td class="text-left" style="padding-left:10px;">'.$datalabel[$i]['penyakit'].'</td>
                                            <td>'.$datalabel[$i]['totalold'].'</td>
                                            <td>'.$datalabel[$i]['totalnew'].'     ';
                                            if($datalabel[$i]['totalold'] > $datalabel[$i]['totalnew']){
                                                echo' <img style="max-width: 12px;" class="menu-icon" src="../Assets/icons/icon_down.svg"></td>';
                                            } elseif($datalabel[$i]['totalold'] < $datalabel[$i]['totalnew']){
                                                echo' <img style="max-width: 12px;" class="menu-icon" src="../Assets/icons/icon_up.svg"></td>';
                                            } else{
                                                echo' <img style="max-width: 12px;" class="menu-icon" src="../Assets/icons/icon_same.svg"></td>';
                                            }
                                            echo'
                                            </tr>
                                        ';
                                        }echo'
                                    </tbody>
                '; ?> 
                                    
                                </table>
                                <div style="padding-left:5px;padding-top:20px;" class="text-left">
                            <a class="btn btn-secondary text-center" style="padding-left: 11px;-webkit-box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);" href="pasienptm.php" class="tambah">Detail</a>
                            </div>
                </div>
                </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                    <div class="card-body" style="padding-bottom:34px!important;">
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
                                            <th>Selesai</th>
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
                        <div style="padding-left:20px;padding-top:20px;" class="text-left">
                        <a class="btn btn-secondary text-center" style="padding-left: 11px;-webkit-box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);" href="laporan.php" class="tambah">Detail</a>
                        </div>         
                    </div>
                    </div>                   
                </div>
            </div>
        </div> <!-- .content -->
    <?php include('include/footer.php'); ?> 
    <script type="text/javascript">
        $(document).ready(function() {
            $.ajax({
                type:"GET",
                url:"action/Grafik/GrafikBulan.php",
                dataType:"json",
                success: function(data) {
                    var mon=[];
                    var sums=[];
                    for (var i in data) {
                        mon.push(data[i].mon);
                        sums.push(data[i].sums);
                    }
                    var maxim=Math.max.apply(this, sums);
                    maxim=maxim*2;
                    var ctx = $("#mycanvas");
                    var barGraph = new Chart(ctx, {
                        type:'line',
                        data:{
                            labels: mon,
                            datasets: [
                            {
                                label: 'Surveilans PTM',
                                data: sums,
                            }
                            ]
                        },
                        options:{
                            legend: {
                                display: false
                            },
                            scales: {
                    
                    yAxes: [{
                        gridLines: {
                            display : true
                        },
                        ticks: {
                            max:maxim,
                            beginAtZero:true,
                        }
                    }]
                }
                            
                            }
                    });
                    barGraph.update();
                },
                complete: function() {}
            });  
        }); 
    </script>
    <script>
    var dataSet = [
                <?php include('action/reportschedule_clientside.php'); ?>                
                ];
                var table=$('#tablepenyakit').DataTable({
                    
                "language": {
                            "paginate": {    
                                        "next":       "Selanjutnya",
                                        "previous":false
                                        }
                            }
                });
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
                        "targets": [ 7],
                        "visible": false
                                
                    },
                    {
                        "targets": [ 8],
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
                    {
                        "targets": [ 13],
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
    </script>
<div id="container">
  
 
  
</div>



</body>
</html>
