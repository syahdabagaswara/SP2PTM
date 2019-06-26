
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
                <div class="col-lg-4 col-md-6">
                    <h3 style="color:#8c8e8d;"><b>Grafik Usia</b></h3>
                </div>

                <div class="col-lg-8 col-md-6">
                    <div class="row">
                        
                        <div class="col-lg-3">
                             <div class="input-group">      
                                    <div class="input-group-btn" style="-webkit-box-shadow: 0 4px 8px   rgba(0, 0, 0, 0.20);box-shadow: 0 4px 8px  rgba(0, 0, 0, 0.20);">
                                        <div class="btn-group" >
                                            <div id="">
                                            <select data-placeholder="" type="text" id="grafikarea" name="koordinator" class=" form-control btn btn-primary placeholder " tabindex="1">
                                                <option value="" selected>Wilayah</option>
                                                <option value="" >Semua</option>
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
                                    </div>        
                            </div>
                        </div>
                        <div class="col-lg-3">
                             <div class="input-group">      
                                    <div class="input-group-btn" style="-webkit-box-shadow: 0 4px 8px   rgba(0, 0, 0, 0.20);box-shadow: 0 4px 8px  rgba(0, 0, 0, 0.20);">
                                        <div class="btn-group" >
                                            <div id="">
                                            <select data-placeholder="" type="text" id="grafikbulan" name="koordinator" class=" form-control btn btn-primary placeholder " tabindex="1">
                                                <option  class="option" value="" selected>Bulan</option>
                                                <option  class="option" value="" >Semua</option>
                                                <option  class="option" value="1" >Januari</option> 
                                                <option  class="option" value="2" >Februari</option> 
                                                <option  class="option" value="3" >Maret</option> 
                                                <option  class="option" value="4" >April</option> 
                                                <option  class="option" value="5" >Mei</option> 
                                                <option  class="option" value="6" >Juni</option> 
                                                <option  class="option" value="7" >Juli</option> 
                                                <option  class="option" value="8" >Agustus</option> 
                                                <option  class="option" value="9" >September</option> 
                                                <option  class="option" value="10" >Oktober</option> 
                                                <option  class="option" value="11" >November</option> 
                                                <option  class="option" value="12" >Desember</option> 
                                            </select>
                                            </div>
                                        </div>
                                    </div>        
                            </div>
                        </div>
                        <div class="col-lg-3">
                             <div class="input-group">      
                                    <div class="input-group-btn" style="-webkit-box-shadow: 0 4px 8px   rgba(0, 0, 0, 0.20);box-shadow: 0 4px 8px  rgba(0, 0, 0, 0.20);">
                                        <div class="btn-group" >
                                            <div id="">
                                            <select data-placeholder="" type="text" id="grafiktahun" name="koordinator" class=" form-control btn btn-primary placeholder " tabindex="1">
                                                <?php
                                                $yearquery=mysqli_query($koneksi,"SELECT DISTINCT(YEAR(visitdate)) AS list FROM datareport");
                                                $numsyear=mysqli_num_rows($yearquery);
                                                while($rowyear=mysqli_fetch_assoc($yearquery)){
                                                    $listyear[]=$rowyear;
                                                }
                                                ?>
                                                <option  class="option" value="" selected>Tahun</option>
                                                <option  class="option" value="" >Semua</option>
                                                <?php
                                                for($y=0;$y<$numsyear;$y++){
                                                echo '<option  class="option" value="'.$listyear[$y]['list'].'" >'.$listyear[$y]['list'].'</option>';
                                                }
                                                ?> 
                                            </select>
                                            </div>
                                        </div>
                                    </div>        
                            </div>
                        </div>
                        <div class="col-lg-3 text-center">
                             <div class="input-group-btn" >
                                        <button class="btn btn-secondary " onclick="saveAsPDF();"  style="-webkit-box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);">
                                            <i class="fa fa-arrow-down fa-lg"></i><a class="unduh">Unduh</a>
                                        </button>
                            </div>
                                
                            
                        </div>
                    </div>
                </div>
               

                
            </div> 
            <!-- Widgets End -->


          
            
                <div class="card">
                    <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                                <!-- <canvas id="myChart"></canvas> -->
                                <div id="chart-container">
                                    <div class="text-center grafiktittle">
                                   <a id="tittlehead">Data Grafik Usia</a ></br><a id="datahead"></a>
                                    </div>
                                   <canvas id="mycanvas"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                                <!-- <canvas id="myChart"></canvas> -->
                                <div id="chart-container2">
                                    <div class="text-center grafiktittle">
                                    <a id="tittlehead">Data Grafik Penyakit</a ></br><a id="datahead"></a>
                                    </div>
                                   <canvas id="mycanvasp"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div> <!-- .content -->
        <?php include('include/footer.php'); ?> 
    <script type="text/javascript">
        function Zone() {
   
   $.ajax({
      type: "GET",
      url: "action/Grafik/GrafikUsia.php",
      dataType: "json",
      data: {
            bur: $("#grafikarea option:selected").val(),
            cur: $("#grafikbulan option:selected").val(),
            lur: $("#grafiktahun option:selected").val()
          },
      success: function(data) {
          
          $('#mycanvas').remove(); // this is my <canvas> element
          $('#chart-container').append('<canvas id="mycanvas"><canvas>');
          $('#mycanvasp').remove(); // this is my <canvas> element
        $('#chart-container2').append('<canvas id="mycanvasp"><canvas>');

         var age = [];
         var men = [];
         var girl = [];
         var newpatient = [];
         var oldpatient = [];
         var sums = [];
         var coloR = [];
         var dynamicColors = function() {
            var letters = '0123456789ABCDEF'.split('');
            var color = '#';
            for (var i = 0; i < 6; i++ ) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
         };
         
        
         for (var i in data) {
            
            age.push(data[i].label);
            men.push(data[i].laki);
            girl.push(data[i].perempuan);
            newpatient.push(data[i].baru);
            oldpatient.push(data[i].lama);
            sums.push(data[i].total);
            coloR.push(dynamicColors());
            
         }
         var maxim=Math.max.apply(this, sums);
         maxim=maxim+5;
         var chartdata = {
            labels: age,
            datasets: [{
               label: 'Laki-Laki',
               backgroundColor: 'rgba(32,178,170, 0.75)',
               hoverBackgroundColor: 'rgba(32,178,170, 1)',
               data: men
            }, {
               label: 'Perempuan',
               backgroundColor: 'rgba(219,112,147, 0.75)',
               hoverBackgroundColor: 'rgba(219,112,147, 1)',
               data: girl
            }, {
               label: 'Pasien Baru',
               backgroundColor: 'rgba(178,34,34, 0.75)',
               hoverBackgroundColor: 'rgba(178,34,34, 1)',
               hidden: true,
               data: newpatient
            }, {
               label: 'Pasien Lama',
               backgroundColor: 'rgba(119,136,153, 0.75)',
               hoverBackgroundColor: 'rgba(119,136,153, 1)',
               hidden: true,
               data: oldpatient
            }, {
               label: 'Total Penyakit',
               backgroundColor: 'rgba(100, 100, 200, 0.75)',
               hoverBackgroundColor: 'rgba(100, 100, 200, 1)',
               hidden: true,
               data: sums
            }]
         };

         
         var ctx = $("#mycanvas");
         var ctp =$("#mycanvasp");
         var barGraph = new Chart(ctx, {
            type: 'horizontalBar',
            data: chartdata,
            options: {
                legend: {
                      display: true,
                      position: 'right',
                      labels: {
                        fontFamily:'Montserrat',
                        fontStyle:'bold',
                        padding:20,
                        boxWidth:20,
                      }
                    },
                scales: {
                    yAxes: [{

                        display: true,
                        gridLines: {
                            display : true
                        },
                        ticks: {

                            display: true,
                            beginAtZero:true,

                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            display : true
                        },
                        ticks: {
                            max:maxim,
                            beginAtZero:true,
                        }
                    }]
                }}
         });
         var myPieChart = new Chart(ctp,{
            type: 'pie',
            data: {
            labels: age,
            datasets: [{
                backgroundColor: coloR,
                data: sums,
                
                
            }]
            },
            options: {
                tooltips: {
			callbacks: {
				label: function(tooltipItem, data) {
					var allData = data.datasets[tooltipItem.datasetIndex].data;
					var tooltipLabel = data.labels[tooltipItem.index];
					var tooltipData = allData[tooltipItem.index];
					var total = 0;
					for (var i in allData) {
						total += parseFloat(allData[i]);
					}
					var tooltipPercentage = Math.round((tooltipData / total) * 100);
					return tooltipLabel + ': ' + tooltipData + ' (' + tooltipPercentage + '%)';
				}
			}
		},
                
                legend: {
                      display: true,
                      position: 'right',
                      labels: {
                        fontFamily:'Montserrat',
                        fontStyle:'bold',
                        padding:20,
                        boxWidth:20,
                      },
                      
                      
                    }
                
            }
        });
         barGraph.update();
         myPieChart.update();
         

          

      },
      complete: function() {}
   });
}
$(document).ready(function() {
    var bulan = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
    $('select').niceSelect();
        Zone();
    $('select').on('change', function() {
        Zone();
        var date = new Date($('#grafikbulan option:selected').val());
        if (bulan[date.getMonth()] == null){
        var month="";    
        }else{
        var month=bulan[date.getMonth()];
        }
        $('#datahead').html('' + $('#grafikarea option:selected').val() +' '+month+' '+$('#grafiktahun option:selected').val()+'');
   });

});
 function saveAsPDF() {
   html2canvas(document.getElementById("chart-container"), {
       onrendered: function(canvas) {
        var tittle='' + $('#tittlehead').text() +' '+$('#datahead').text()+'';

         var img = canvas.toDataURL(); //image data of canvas
         var doc = new jsPDF('l', 'mm', [355.6,215.9]);
         doc.addImage(img, 30, 20);
         doc.save(tittle+'.pdf');
      }
   });
}
    </script>
<div id="container">
  
 
  
</div>



</body>
</html>
