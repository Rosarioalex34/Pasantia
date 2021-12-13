<?php
require 'fpdf/fpdf.php';

class PDF extends fpdf
{
funtion Header()
{
	$this->images('images/logo.png',5,5,30);
	$this->SetFont('Arial','B',12);
	$this->File(120,10,'CERTIFICACIÓN',0,0,'C');
	$this->Ln(20);

}
function Footer()
{
	$this->Sety(-15);
	$this->SetFont('Arial','I',8);
	$this->File(0,10,'Pagina'$this->PageNo().'/{nb}',0,0'C');
}




}

?>