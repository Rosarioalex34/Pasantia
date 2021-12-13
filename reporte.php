<?php
	include 'plantilla.php';
	require 'conexion.php';
	
	$query = "SELECT provincia.nombre, municipio.id, provincia.nombre FROM provincia, municipio WHERE provincia.id = municipio.provincia_id";
	
	// $query = "SELECT provincia.nombre, municipio.id, municipio.nombre FROM provincia, municipio AS m INNER JOIN t_estado AS e ON m.id_estado=e.id_estado";

	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(70,6,'Provincia',1,0,'C',1);
	$pdf->Cell(20,6,'ID',1,0,'C',1);
	$pdf->Cell(70,6,'MUNICIPIO',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(70,6,utf8_decode($row['provincia.nombre']),1,0,'C');
		$pdf->Cell(20,6,$row['municipio.id'],1,0,'C');
		$pdf->Cell(70,6,utf8_decode($row['municipio.nombre']),1,1,'C');
	}
	$pdf->Output();
?>