<?php
include '../../../koneksi.php';

// memanggil library FPDF
require('cellfit.php');

$report_id=$_GET['code'];
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF_CellFit('l','mm',array(355.6,215.9));
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Times','B',10);
// mencetak string 
$pdf->Cell(335,10,'LAPORAN PROGRAM PENYAKIT TIDAK MENULAR BERBASIS PUSKESMAS KABUPATEN SLEMAN',10,5,'C');

$queryheader=mysqli_query($koneksi,"SELECT a.kode,b.name ,b.area,a.daterelease FROM report a,user b WHERE a.id='$report_id' AND b.id=a.id_user ");
$datahead=mysqli_fetch_assoc($queryheader);
function bln_indo($tanggal){
    $bulan = array (1 =>   'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
        $split = explode('-', $tanggal);
        return $bulan[ (int)$split[1] ];
    }
function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}


$pdf->setXY(20,12);
$pdf->Cell(10,30,'Puskesmas',0,0,'L');
$pdf->Cell(30,30,':',0,0,'C');
$pdf->setXY(48,12);
$pdf->Cell(10,30,$datahead['name'],0,'L');
$pdf->setXY(20,18);
$pdf->Cell(10,30,'Kecamatan',0,0,'L');
$pdf->Cell(30,30,':',0,0,'C');
$pdf->setXY(48,18);
$pdf->Cell(10,30,$datahead['area'],0,0,'L');
$pdf->setXY(20,24);
$pdf->Cell(10,30,'Kabupaten',0,0,'L');
$pdf->Cell(30,30,':',0,0,'C');
$pdf->setXY(48,24);
$pdf->Cell(10,30,"Sleman",0,0,'L');
$pdf->setXY(20,30);
$pdf->Cell(10,30,'Provinsi',0,0,'L');
$pdf->Cell(30,30,':',0,0,'C');
$pdf->setXY(48,30);
$pdf->Cell(10,30,"Yogyakarta",0,0,'L');


$month=bln_indo($datahead['daterelease']);
$year=date("Y",strtotime($datahead['daterelease']));
$pdf->setXY(280,24);
$pdf->Cell(10,30,'Bulan',0,0,'L');
$pdf->Cell(15,30,':',0,0,'C');
$pdf->setXY(300,24);
$pdf->Cell(10,30,$month,0,0,'L');
$pdf->setXY(280,30);
$pdf->Cell(10,30,'Tahun',0,0,'L');
$pdf->Cell(15,30,':',0,0,'C');
$pdf->setXY(300,30);
$pdf->Cell(10,30,$year,0,0,'L');

$pdf->setXY(10,55);
$pdf->setFillColor(255, 255, 155); 
$pdf->Cell(10,20,'NO.',1,0,'C',1);
$pdf->Cell(15,20,'ICD X',1,0,'C',1);
$pdf->Cell(35,20,'Jenis Penyakit',1,0,'C',1);
$pdf->Cell(280,5,'Jumlah Penderita',1,0,'C',1);

$pdf->setXY(10,60);
$pdf->Cell(10,5,'',0,0,'C');
$pdf->Cell(15,5,'',0,0,'C');
$pdf->Cell(35,5,'',0,0,'C');
$pdf->Cell(40,5,'15-19 Th',1,0,'C',1);
$pdf->Cell(40,5,'20-44 Th',1,0,'C',1);
$pdf->Cell(40,5,'45-54 Th',1,0,'C',1);
$pdf->Cell(40,5,'55-58 Th',1,0,'C',1);
$pdf->Cell(40,5,'60-69 Th',1,0,'C',1);
$pdf->Cell(40,5,'>70 Th',1,0,'C',1);
$pdf->Cell(40,5,'Total',1,0,'C',1);

$pdf->setXY(10,65);
$pdf->Cell(10,5,'',0,0,'C');
$pdf->Cell(15,5,'',0,0,'C');
$pdf->Cell(35,5,'',0,0,'C');
for($a=0;$a<7;$a++){
$pdf->Cell(20,5,'Baru',1,0,'C',1);
$pdf->Cell(20,5,'Lama',1,0,'C',1);
}

$pdf->setXY(10,70);
$pdf->Cell(10,5,'',0,0,'C');
$pdf->Cell(15,5,'',0,0,'C');
$pdf->Cell(35,5,'',0,0,'C');
for($b=0;$b<14;$b++){
$pdf->Cell(10,5,'L',1,0,'C',1);
$pdf->Cell(10,5,'P',1,0,'C',1);
}

$pdf->SetFont('Times','',10);
$querydisease=mysqli_query($koneksi,"SELECT * FROM disease");
$numdisease=mysqli_num_rows($querydisease);
while($rowdis=mysqli_fetch_assoc($querydisease)){
	$datadisease[]=$rowdis;
}
$y=70;
$n=0;

for($i=0;$i<$numdisease;$i++){
	$y=$y+5;
	$n=$n+1;
	if($n % 2 == 0){
		$pdf->setFillColor(222, 222, 222);
	}else{
		$pdf->setFillColor(255, 255, 255);
	}
	if(strlen($datadisease[$i]['name'])>19){
		$parsed = get_string_between($datadisease[$i]['name'], '(', ')');
		$datadisease[$i]['name']=$parsed;
	}else{

	}
	$pdf->setXY(10,$y);
	$pdf->Cell(10,5,$n,1,0,'C',1);
	$pdf->Cell(15,5,$datadisease[$i]['icd_x'],1,0,'C',1);
	$pdf->CellFitScale(35,5,$datadisease[$i]['name'],1,0,'L',1);
	$disease_id=$datadisease[$i]['id'];
	$querydata=mysqli_query($koneksi,"SELECT id,age,status,gender FROM datareport WHERE disease_id='$disease_id' AND report_id='$report_id'");
	$datanums=mysqli_num_rows($querydata);
	$datareport=array();
	$BL15n19=0;
	$BL20n44=0;
	$BL45n54=0;
	$BL55n58=0;
	$BL60n69=0;
	$BL70=0;
	$BP15n19=0;
	$BP20n44=0;
	$BP45n54=0;
	$BP55n58=0;
	$BP60n69=0;
	$BP70=0;
	$LL15n19=0;
	$LL20n44=0;
	$LL45n54=0;
	$LL55n58=0;
	$LL60n69=0;
	$LL70=0;
	$LP15n19=0;
	$LP20n44=0;
	$LP45n54=0;
	$LP55n58=0;
	$LP60n69=0;
	$LP70=0;
	$TBL=0;
	$TBP=0;
	$TLL=0;
	$TLP=0;
	while($datarows=mysqli_fetch_assoc($querydata)){
		$datareport[]=$datarows;
	}
	for($j=0;$j<$datanums;$j++){
		if($datareport[$j]['status']=="Baru"){
			if($datareport[$j]['gender']=="Laki-Laki"){
				$TBL=$TBL+1;
				if($datareport[$j]['age']>=15 && $datareport[$j]['age']<=19){
					$BL15n19=$BL15n19+1;
				}elseif($datareport[$j]['age']>=20 && $datareport[$j]['age']<=44){
					$BL20n44=$BL20n44+1;
				}elseif($datareport[$j]['age']>=45 && $datareport[$j]['age']<=54){
					$BL45n54=$BL45n54+1;
				}elseif($datareport[$j]['age']>=55 && $datareport[$j]['age']<=58){
					$BL55n58=$BL55n58+1;
				}elseif($datareport[$j]['age']>=60 && $datareport[$j]['age']<=69) {
					$BL60n69=$BL60n69+1;
				}elseif($datareport[$j]['age']>=70 ){
					$BL70=$BL70+1;
				}else{

				}
			}else{
				$TBP=$TBP+1;
				if($datareport[$j]['age']>=15 && $datareport[$j]['age']<=19){
					$BP15n19=$BP15n19+1;
				}elseif($datareport[$j]['age']>=20 && $datareport[$j]['age']<=44){
					$BP20n44=$BP20n44+1;
				}elseif($datareport[$j]['age']>=45 && $datareport[$j]['age']<=54){
					$BP45n54=$BP45n54+1;
				}elseif($datareport[$j]['age']>=55 && $datareport[$j]['age']<=58){
					$BP55n58=$BP55n58+1;
				}elseif($datareport[$j]['age']>=60 && $datareport[$j]['age']<=69) {
					$BP60n69=$BP60n69+1;
				}elseif($datareport[$j]['age']>=70 ){
					$BP70=$BP70+1;
				}else{

				}

			}

		}else{
			if($datareport[$j]['gender']=="Laki-Laki"){
				$TLL=$TLL+1;
				if($datareport[$j]['age']>=15 && $datareport[$j]['age']<=19){
					$LL15n19=$LL15n19+1;
				}elseif($datareport[$j]['age']>=20 && $datareport[$j]['age']<=44){
					$LL20n44=$LL20n44+1;
				}elseif($datareport[$j]['age']>=45 && $datareport[$j]['age']<=54){
					$LL45n54=$LL45n54+1;
				}elseif($datareport[$j]['age']>=55 && $datareport[$j]['age']<=58){
					$LL55n58=$LL55n58+1;
				}elseif($datareport[$j]['age']>=60 && $datareport[$j]['age']<=69) {
					$LL60n69=$LL60n69+1;
				}elseif($datareport[$j]['age']>=70 ){
					$LL70=$LL70+1;
				}else{

				}
			}else{
				$TLP=$TLP+1;
				if($datareport[$j]['age']>=15 && $datareport[$j]['age']<=19){
					$LP15n19=$LP15n19+1;
				}elseif($datareport[$j]['age']>=20 && $datareport[$j]['age']<=44){
					$LP20n44=$LP20n44+1;
				}elseif($datareport[$j]['age']>=45 && $datareport[$j]['age']<=45){
					$LP45n54=$LP45n54+1;
				}elseif($datareport[$j]['age']>=55 && $datareport[$j]['age']<=58){
					$LP55n58=$LP55n58+1;
				}elseif($datareport[$j]['age']>=60 && $datareport[$j]['age']<=69) {
					$LP60n69=$LP60n69+1;
				}elseif($datareport[$j]['age']>=70 ){
					$LP70=$LP70+1;
				}else{

				}

			}

		}
	}
	$pdf->CellFitScale(10,5,$BL15n19,1,0,'C',1);
	$pdf->CellFitScale(10,5,$BP15n19,1,0,'C',1);
	$pdf->CellFitScale(10,5,$LL15n19,1,0,'C',1);
	$pdf->CellFitScale(10,5,$LP15n19,1,0,'C',1);

	$pdf->CellFitScale(10,5,$BL20n44,1,0,'C',1);
	$pdf->CellFitScale(10,5,$BP20n44,1,0,'C',1);
	$pdf->CellFitScale(10,5,$LL20n44,1,0,'C',1);
	$pdf->CellFitScale(10,5,$LP20n44,1,0,'C',1);

	$pdf->CellFitScale(10,5,$BL45n54,1,0,'C',1);
	$pdf->CellFitScale(10,5,$BP45n54,1,0,'C',1);
	$pdf->CellFitScale(10,5,$LL45n54,1,0,'C',1);
	$pdf->CellFitScale(10,5,$LP45n54,1,0,'C',1);

	$pdf->CellFitScale(10,5,$BL55n58,1,0,'C',1);
	$pdf->CellFitScale(10,5,$BP55n58,1,0,'C',1);
	$pdf->CellFitScale(10,5,$LL55n58,1,0,'C',1);
	$pdf->CellFitScale(10,5,$LP55n58,1,0,'C',1);

	$pdf->CellFitScale(10,5,$BL60n69,1,0,'C',1);
	$pdf->CellFitScale(10,5,$BP60n69,1,0,'C',1);
	$pdf->CellFitScale(10,5,$LL60n69,1,0,'C',1);
	$pdf->CellFitScale(10,5,$LP60n69,1,0,'C',1);

	$pdf->CellFitScale(10,5,$BL70,1,0,'C',1);
	$pdf->CellFitScale(10,5,$BP70,1,0,'C',1);
	$pdf->CellFitScale(10,5,$LL70,1,0,'C',1);
	$pdf->CellFitScale(10,5,$LP70,1,0,'C',1);

	$pdf->CellFitScale(10,5,$TBL,1,0,'C',1);
	$pdf->CellFitScale(10,5,$TBP,1,0,'C',1);
	$pdf->CellFitScale(10,5,$TLL,1,0,'C',1);
	$pdf->CellFitScale(10,5,$TLP,1,0,'C',1);
}
	$pdf->setXY(50,142);
	$pdf->Cell(10,30,'Mengetahui,',0,0,'L');
	$pdf->setXY(50,146);
	$pdf->Cell(10,30,'Kepala Puskesmas',0,0,'L');
	$pdf->setXY(50,156);
	$pdf->Cell(10,30,'___________________',0,0,'L');
	$pdf->setXY(50,161);
	$pdf->Cell(10,30,'NIP :',0,0,'L');

	date_default_timezone_set('Asia/Jakarta');
	$now=date('Y-m-d');
	$date=date('d',strtotime($now)).' '.bln_indo($now).' '.date('Y',strtotime($now));
	$pdf->setXY(270,142);
	$pdf->Cell(10,30,'Sleman, '.$date,0,0,'L');
	$pdf->setXY(270,146);
	$pdf->Cell(10,30,'Penanggung Jawab',0,0,'L');
	$pdf->setXY(270,156);
	$pdf->Cell(10,30,'___________________',0,0,'L');
	$pdf->setXY(270,161);
	$pdf->Cell(10,30,'NIP :',0,0,'L');
	
	

$pdf->Output('D',$datahead['kode'].'.pdf');
 // $pdf->Output();
?>