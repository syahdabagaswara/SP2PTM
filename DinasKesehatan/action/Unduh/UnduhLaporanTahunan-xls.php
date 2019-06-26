<?php
    include '../../../koneksi.php';
    require('../../../Assets/PHPExcel-1.8/Classes/PHPExcel.php');
    $report_id=$_GET['code'];
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
    $querydisease=mysqli_query($koneksi,"SELECT * FROM disease");
    $numdisease=mysqli_num_rows($querydisease);
    while($rowdis=mysqli_fetch_assoc($querydisease)){
        $datadisease[]=$rowdis;
    }
    $y=70;
    $n=0;
    $objPHPExcel = new PHPExcel();
 
    // Set properties
    $sheet = $objPHPExcel->getActiveSheet();
    
    $sheet->mergeCells('A1:A4');
    $sheet->mergeCells('B1:B4');
    $sheet->mergeCells('C1:C4');
    $sheet->mergeCells('D1:AE1');
    $sheet->mergeCells('D2:G2');
    $sheet->mergeCells('D3:E3');
    $sheet->mergeCells('F3:G3');
    $sheet->mergeCells('H2:K2');
    $sheet->mergeCells('H3:I3');
    $sheet->mergeCells('J3:K3');
    $sheet->mergeCells('L2:O2');
    $sheet->mergeCells('L3:M3');
    $sheet->mergeCells('N3:O3');
    $sheet->mergeCells('P2:S2');
    $sheet->mergeCells('P3:Q3');
    $sheet->mergeCells('R3:S3');
    $sheet->mergeCells('T2:W2');
    $sheet->mergeCells('T3:U3');
    $sheet->mergeCells('V3:W3');
    $sheet->mergeCells('X2:AA2');
    $sheet->mergeCells('X3:Y3');
    $sheet->mergeCells('Z3:AA3');
    $sheet->mergeCells('AB2:AE2');
    $sheet->mergeCells('AB3:AC3');
    $sheet->mergeCells('AD3:AE3');
    // $sheet->mergeCells('N2:O2');
    // $sheet->mergeCells('P2:Q2');

    $style = array(
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        )
    );

    $sheet->getDefaultStyle()->applyFromArray($style);
     
    $row = 1; // mulai dari baris ke dua
    // Set lebar kolom
    $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
    $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(10);
    $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
    $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(5);
    $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(5);
    $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(5);
    $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(5);
    $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(5);
    $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(5);
    $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(5);
    $objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(5);
    $objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(5);
    $objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(5);
    $objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(5);
    $objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(5);
    $objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(5);
    $objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(5);
    $objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(5);
    $objPHPExcel->getActiveSheet()->getColumnDimension('S')->setWidth(5);
    $objPHPExcel->getActiveSheet()->getColumnDimension('T')->setWidth(5);
    $objPHPExcel->getActiveSheet()->getColumnDimension('U')->setWidth(5);
    $objPHPExcel->getActiveSheet()->getColumnDimension('V')->setWidth(5);
    $objPHPExcel->getActiveSheet()->getColumnDimension('W')->setWidth(5);
    $objPHPExcel->getActiveSheet()->getColumnDimension('X')->setWidth(5);
    $objPHPExcel->getActiveSheet()->getColumnDimension('Y')->setWidth(5);
    $objPHPExcel->getActiveSheet()->getColumnDimension('Z')->setWidth(5);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AA')->setWidth(5);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AB')->setWidth(5);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AC')->setWidth(5);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AD')->setWidth(5);
    $objPHPExcel->getActiveSheet()->getColumnDimension('AE')->setWidth(5);

    // Mergecell, menyatukan beberapa kolom
    // $objPHPExcel->getActiveSheet()->mergeCells('A1 : D1');


     
    // //Tulis judul tabel
     
    $objPHPExcel->setActiveSheetIndex(0)
                ->SetCellValue('A'.$row, 'No')
                ->SetCellValue('B'.$row, 'ICD X')
                ->SetCellValue('C'.$row, 'Jenis Penyakit')
                ->SetCellValue('D'.$row, 'Jumlah Penderita');
    $row++;
    $objPHPExcel->setActiveSheetIndex(0)
                ->SetCellValue('D'.$row, '15 - 19 Th')
                ->SetCellValue('H'.$row, '20 - 44 Th')
                ->SetCellValue('L'.$row, '45 - 54 Th')
                ->SetCellValue('P'.$row, '55 - 58 Th')
                ->SetCellValue('T'.$row, '60 - 69 Th')
                ->SetCellValue('X'.$row, '> 70 Th')
                ->SetCellValue('AB'.$row, 'Total');
    $row++;
    $objPHPExcel->setActiveSheetIndex(0)
                ->SetCellValue('D'.$row, 'Baru')
                ->SetCellValue('F'.$row, 'Lama')
                ->SetCellValue('H'.$row, 'Baru')
                ->SetCellValue('J'.$row, 'Lama')
                ->SetCellValue('L'.$row, 'Baru')
                ->SetCellValue('N'.$row, 'Lama')
                ->SetCellValue('P'.$row, 'Baru')
                ->SetCellValue('R'.$row, 'Lama')
                ->SetCellValue('T'.$row, 'Baru')
                ->SetCellValue('V'.$row, 'Lama')
                ->SetCellValue('X'.$row, 'Baru')
                ->SetCellValue('Z'.$row, 'Lama')
                ->SetCellValue('AB'.$row, 'Baru')
                ->SetCellValue('AD'.$row, 'Lama');
    $row++;
    $objPHPExcel->setActiveSheetIndex(0)
                ->SetCellValue('D'.$row, 'L')
                ->SetCellValue('E'.$row, 'P')
                ->SetCellValue('F'.$row, 'L')
                ->SetCellValue('G'.$row, 'P')
                ->SetCellValue('H'.$row, 'L')
                ->SetCellValue('I'.$row, 'P')
                ->SetCellValue('J'.$row, 'L')
                ->SetCellValue('K'.$row, 'P')
                ->SetCellValue('L'.$row, 'L')
                ->SetCellValue('M'.$row, 'P')
                ->SetCellValue('N'.$row, 'L')
                ->SetCellValue('O'.$row, 'P')
                ->SetCellValue('P'.$row, 'L')
                ->SetCellValue('Q'.$row, 'P')
                ->SetCellValue('R'.$row, 'L')
                ->SetCellValue('S'.$row, 'P')
                ->SetCellValue('T'.$row, 'L')
                ->SetCellValue('U'.$row, 'P')
                ->SetCellValue('V'.$row, 'L')
                ->SetCellValue('W'.$row, 'P')
                ->SetCellValue('X'.$row, 'L')
                ->SetCellValue('Y'.$row, 'P')
                ->SetCellValue('Z'.$row, 'L')
                ->SetCellValue('AA'.$row, 'P')
                ->SetCellValue('AB'.$row, 'L')
                ->SetCellValue('AC'.$row, 'P')
                ->SetCellValue('AD'.$row, 'L')
                ->SetCellValue('AE'.$row, 'P') ;
    $row++;
    $nomor = 1;
     
    //cetak dari database
    for($i=0;$i<$numdisease;$i++){
        $disease_id=$datadisease[$i]['id'];
        $datareport=array();
        $querydata=mysqli_query($koneksi,"SELECT c.id,c.age,c.status,c.gender FROM report a,report b,datareport c WHERE a.child_id='$report_id' AND b.child_id=a.id AND c.report_id=b.id AND c.disease_id='$disease_id' ");
        $datanumps=mysqli_num_rows($querydata);
        while($datarows=mysqli_fetch_assoc($querydata)){
            $datareport[]=$datarows;
        }
        
        
        $querydata=mysqli_query($koneksi,"SELECT d.id,d.age,d.status,d.gender FROM report a,report b,report c,datareport d WHERE a.child_id='$report_id' AND b.child_id=a.id AND c.child_id=b.id AND d.report_id=c.id AND d.disease_id='$disease_id' ");
        $datanumfktp=mysqli_num_rows($querydata);
        while($datarowss=mysqli_fetch_assoc($querydata)){
            $datareport[]=$datarowss;
        }
        $datanums=$datanumps+$datanumfktp;
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
        $objPHPExcel->setActiveSheetIndex(0)
			->SetCellValue('A'.$row, $nomor)
			->SetCellValue('B'.$row, $datadisease[$i]['icd_x'])
            ->SetCellValue('C'.$row, $datadisease[$i]['name'])
            ->SetCellValue('D'.$row, $BL15n19)
            ->SetCellValue('E'.$row, $BP15n19)
            ->SetCellValue('F'.$row, $LL15n19)
            ->SetCellValue('G'.$row, $LP15n19)
            ->SetCellValue('H'.$row, $BL20n44)
            ->SetCellValue('I'.$row, $BP20n44)
            ->SetCellValue('J'.$row, $LL20n44)
            ->SetCellValue('K'.$row, $LP20n44)
            ->SetCellValue('L'.$row, $BL45n54)
            ->SetCellValue('M'.$row, $BP45n54)
            ->SetCellValue('N'.$row, $LL45n54)
            ->SetCellValue('O'.$row, $LP45n54)
            ->SetCellValue('P'.$row, $BL55n58)
            ->SetCellValue('Q'.$row, $BP55n58)
            ->SetCellValue('R'.$row, $LL55n58)
            ->SetCellValue('S'.$row, $LP55n58)
            ->SetCellValue('T'.$row, $BL60n69)
            ->SetCellValue('U'.$row, $BP60n69)
            ->SetCellValue('V'.$row, $LL60n69)
            ->SetCellValue('W'.$row, $LP60n69)
            ->SetCellValue('X'.$row, $BL70)
            ->SetCellValue('Y'.$row, $BP70)
            ->SetCellValue('Z'.$row, $LL70)
            ->SetCellValue('AA'.$row, $LP70)
            ->SetCellValue('AB'.$row, $TBL)
            ->SetCellValue('AC'.$row, $TBP)
            ->SetCellValue('AD'.$row, $TLL)
            ->SetCellValue('AE'.$row, $TLP);
 
			$row++;
			$nomor++;//membuat nomor urut
    }
     
    //membuat nama worksheet
    $objPHPExcel->getActiveSheet()->setTitle('Data Laporan');
    $objPHPExcel->setActiveSheetIndex(0);
     
     
     
     
    // Redirect output to a client’s web browser (Excel2007)
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="Data Laporan.xlsx"');
    header('Cache-Control: max-age=0');
    // If you're serving to IE 9, then the following may be needed
    header('Cache-Control: max-age=1');
     
    // If you're serving to IE over SSL, then the following may be needed
    header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
    header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
    header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
    header ('Pragma: public'); // HTTP/1.0
     
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    $objWriter->save('php://output');
    exit;
?>