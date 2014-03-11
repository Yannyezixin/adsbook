<?php
class excel_model
{
    function excel_out($data){
	date_default_timezone_set('Africa/Lagos');
        include 'db_model.php';
        try{
             $sql = 'SELECT * FROM ads_friend WHERE user_id = :user_id';
             $s = $pdo->prepare($sql);
             $s->bindValue(':user_id',$data);
             $s->execute();
        }
        catch(PDOException $e){
            $output = 'error to get the information from ads_friend'.$e->getMessage();
            echo $output;
            exit();
        }
    require_once $_SERVER['DOCUMENT_ROOT'].'/Classes/PHPExcel.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/Classes/PHPExcel/IOFactory.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/Classes/PHPExcel/Writer/Excel5.php';
    //新建
    $resultPHPExcel = new PHPExcel();

    //设置参数

    //设值
    $resultPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(18);
    $resultPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(18);
    $resultPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(18);
    $resultPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(18);
    $resultPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(18);
    $resultPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(18);
	

					
    $resultPHPExcel->getActiveSheet()->setCellValue('A1', '姓名')
    ->setCellValue('B1', '出生日期')
    ->setCellValue('C1', '联系方式')
    ->setCellValue('D1','住址')
    ->setCellValue('E1','邮箱')
    ->setCellValue('F1','行业');
    $i = 2;
    foreach($s as $friend){
        $resultPHPExcel->getActiveSheet()->setCellValue('A' . $i, $friend['f_name'])
            ->setCellValue('B'.$i,$friend['f_date'])
            ->setCellValue('C'.$i,$friend['f_phone'])
            ->setCellValue('D'.$i,$friend['f_address'])
            ->setCellValue('E'.$i,$friend['f_email'])
            ->setCellValue('F'.$i,$friend['f_work']);
        $i ++;
    }
    //设置导出文件名
    $outputFileName = 'friend.xls';
    $xlsWriter = new PHPExcel_Writer_Excel5($resultPHPExcel);
    //ob_start();  ob_flush();
    header("Content-Type: application/force-download");
    header("Content-Type: application/octet-stream");
    header("Content-Type: application/download");
    header('Content-Disposition:inline;filename="'.$outputFileName.'"');
    header("Content-Transfer-Encoding: binary");
    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Pragma: no-cache");

    $xlsWriter->save( "php://output" );
    }


    function excel_in($data){
	}
	
}
