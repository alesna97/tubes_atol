<?php
	include('../config/conn_db.php');
	require 'fpdf/fpdf.php';

	class myPDF extends FPDF{
		function header(){
			$this->SetFont('Arial','B',18);
			$this->Cell(276,5,"Almanac Store",0,0,'C');
			$this->Ln();
			$this->SetFont('Times','',14);
			$this->Cell(276,10,'Laporan Data Cuti',0,0,'C');
			$this->Ln();

		}

		function footer(){
			$this->SetY(-15);
			$this->SetFont('Arial','',8);
			$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
		}

		function headerTable(){
			$this->SetFont('Times','B',12);
			$this->Cell(60,10,'Id Pegawai',1,0,'C');
			$this->Cell(30,10,'jumlah Cuti',1,0,'C');
			$this->Cell(30,10,'Kuota Cuti',1,0,'C');
			$this->Ln();
		}

		function viewTable($res){
			$this->SetFont('Times','',12);
			$sql = "select * from cuti";
			$res = mysqli_query($conn,$sql);
			while ($data = mysqli_fetch_query($res)) {
				$this->Cell(60,10,'<?=$data["id_cuti"] ?>',1,0,'C');
				$this->Cell(30,10,'<?=$data["jumlah_cuti"] ?>',1,0,'C');
				$this->Cell(30,10,'<?=$data["kuota_cuti"] ?>',1,0,'C');
				$this->Ln();
			}
		}
	}


	$pdf = new myPDF();
	$pdf-> AliasNbPages();
	$pdf->AddPage('L','A4',0);
	$pdf->headerTable();
	$fpdf->viewTable($res);
	$pdf->Output();
	
?>