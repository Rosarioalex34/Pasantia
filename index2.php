<?php
	requiere 'fpdf/fpdf.php';

	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->Output();


?>