

<?php
	//error_reporting(E_ALL);
//ini_set('display_errors', '1');
	// Incluyendo formato de plantilla para el reporte en PDF
	include 'plantilla.php';

	// Agregando la conexión a la base de datos para manejo de los datos almacenados.
	require 'Conexion.php';

	$certificado_seleccionado = $_POST["txtIdCertificado"];

	
	$query1 = "SELECT * FROM datos WHERE CERTIFICADO = $certificado_seleccionado;";
	$resultado1 = $mysqli->query($query1);
	while ( $row = $resultado1->fetch_assoc()) 

		{
			
			$numeroregistro = $row['CERTIFICADO'];
			$libro = $row['LIBRO'];

			$folio = $row['FOLIO'];
			$fechaaprobacion = $row['ANO LECTIVO'];
			$centroeducativo_id = $row['CENTRO'];
			//$cursoaprobado_id = $row['cursoaprobado_id'];
			$annolectivo_id = $row['FECHA'];
			$municipio_id = $row['MUNICIPIO'];
			$provincia_id = $row['PROVINCIA'];
			//$regional_id = $row['regional_id'];
			//$id_estudiante = $row['id_estudiante'];
			
			//$fechaentrega = $row['fechaentrega'];
			
			

		}

		$fecha= date ("m/d/Y");
///////// Inicio código Traduciendo fecha en letra ////////////

	function fechaEspaniol ($fecha) {
	  $fecha = substr($fecha, 0, 10);
	  $numeroDia = date('d', strtotime($fecha));
	  $dia = date('l', strtotime($fecha));
	  $mes = date('F', strtotime($fecha));
	  $anio = date('Y', strtotime($fecha));
	  $dias_ES = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
	  $dias_EN = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
	  $nombredia = str_replace($dias_EN, $dias_ES, $dia);
		
		$meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
		 
		 $meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
		  $nombreMes = str_replace($meses_EN, $meses_ES, $mes);
		  return " ".$numeroDia." de ".$nombreMes." de ".$anio;

		}

///////// Fin código Traducción fecha en letra ////////////



	// Probando consulta desde la tabla de estudiantes 
	$query = "SELECT * FROM datos WHERE CERTIFICADO = $certificado_seleccionado";
	$resultado = $mysqli->query($query);
	while ( $row = $resultado->fetch_assoc()) 

	{
		
		$nombreEstudiante = $row['NOMBRES Y APELLIDOS'];
		//$apellidosEstudiante = $row['apellidos'];
//		$cu = $nombre." ".$apellidos;
	}


	$query3 = "SELECT * FROM datos WHERE CERTIFICADO = $certificado_seleccionado;";
	$resultado3 = $mysqli->query($query3);
	while ( $row = $resultado3->fetch_assoc()) 

	{
		
		$nombre = $row['NOMBRES Y APELLIDOS'];
		//$abreviatura = $row['abreviatura'];
		//$cursoaprobado = $nombre." (".$abreviatura.") ";
	}


	//$query4 = "SELECT * FROM datos WHERE FECHA = $FECHA;";
	//$resultado4 = $mysqli->query($query4);
	//while ( $row = $resultado4->fetch_assoc()) 

	{
		
		$annolectivo = $row['FECHA'];
		$fin = $row['fin'];
		//$annolectivo = $inicio."-".$fin;
	}
	$query4 = "SELECT * FROM datos WHERE CERTIFICADO = $certificado_seleccionado;";
	$resultado4 = $mysqli->query($query4);
	while ( $row = $resultado4->fetch_assoc()) 

	{
		
		$centroeducativo = $row['CENTRO'];
		$municipio_id = $row['MUNICIPIO'];
	}


	$query5 = "SELECT * FROM datos WHERE CERTIFICADO = $certificado_seleccionado;";
		$resultado5 = $mysqli->query($query5);
		while ( $row = $resultado5->fetch_assoc()) 

		{
			
			$municipio_id = $row['MUNICIPIO'];
			$provincia_id = $row['PROVINCIA'];
		}

	$query6 = "SELECT * FROM datos WHERE CERTIFICADO = $certificado_seleccionado;";
		$resultado6 = $mysqli->query($query6);
		while ( $row = $resultado6->fetch_assoc()) 

		{
			
			$provincia_id = $row['PROVINCIA'];
			
		}

	$query7 = "SELECT * FROM regional WHERE id = 1;";
		$resultado7 = $mysqli->query($query7);
		while ( $row = $resultado7->fetch_assoc()) 

		{
			
			$nombreregional = $row['nombreregional'];
			$nombredirector = $row['nombredirector'];
			$puesto = $row['puesto'];
			
		}


	$usuario = utf8_decode ("Jesús E. Rosario");


	$pdf = new PDF();
	$pdf->SetRightMargin(25);
	$pdf->SetLeftMargin(25);
	$pdf->AddPage();



	$pdf->Image('images/logo.png', 70, 10,'C');
	$pdf->SetFont('Arial','B',14);
	$pdf->cell(0,60, utf8_decode('Dirección Regional de Educación 07'),0,0,'C');

	$pdf->ln(6);


	$pdf->SetFont('Arial','B',26);
	$pdf->cell(0,110, utf8_decode('CERTIFICACIÓN'),0,0,'C');

	


	$pdf->SetFont('Arial','',8);
	$pdf->ln(75);	
	$pdf->cell(0,1,'Revisado por: '. $usuario,0,0,'R');
	$pdf->ln(4);
	//$pdf->cell(0,1,$cursoaprobado,0,0,'R');
	$pdf->ln(4);
	//$pdf->cell(0,1,'DRE. '.$municipio,0,0,'R');
	$pdf->ln(4);
	$pdf->cell(0,-15,utf8_decode('LIBRO: '. $libro. ' FOLIO. '.$folio),0,0,'R');
	$pdf->ln(4);
	$pdf->cell(0,-15,'CERTIFICADO #: '. $numeroregistro,0,0,'R');

	//$pdf->cell(0,5,'Prueba #: '. $numeroregistro,0,0,'R');


	$pdf->SetFont('Arial','',11);
	$pdf->ln(10);
	$pdf->Write(5, utf8_decode('Quien suscribe: '));

	$pdf->SetFont('Arial','B',11);	
	$pdf->Write(5, utf8_decode($nombredirector));

	$pdf->SetFont('Arial','',11);	
	$pdf->Write(5, utf8_decode(', Director/a Regional de Educación de San Francisco de Macorís, Provincia Duarte.'));

	$pdf->SetFont('Arial','U',18);
	$pdf->ln(15);
	$pdf->cell(0,5, utf8_decode('CERTIFICA:'),0,0,'C');
	//$pdf->Write(5,'CERTIFICA:');

	$pdf->SetFont('Arial','',11);
	//<p align='justify'>
	$pdf->ln(15);
	$pdf->Write(5,'Que: ');

	$pdf->SetFont('Arial','B',12);
	$pdf->write(5, utf8_decode($nombreEstudiante)); 

	$pdf->SetFont('Arial','',11);
	$pdf->Write(5, utf8_decode(' cursó y aprobó el '));
	$pdf->SetFont('Arial','B',12);
	$pdf->Write(5, utf8_decode(' 8vo '));

	$pdf->SetFont('Arial','B',11);
	//$pdf->Write(5, utf8_decode($cursoaprobado)); 

	$pdf->SetFont('Arial','',11);
	$pdf->Write(5, utf8_decode(' grado de la Educación Básica, durante el año lectivo '));

	$pdf->SetFont('Arial','B',12);
	$pdf->Write(5, $fechaaprobacion);


	$pdf->SetFont('Arial','',11);
	$pdf->Write(5, utf8_decode(', el mismo se encuentra registrado con el No. ')); 

	$pdf->SetFont('Arial','B',12);
 	$pdf->Write(5, $numeroregistro);

 	$pdf->SetFont('Arial','',11);
	$pdf->Write(5, utf8_decode (' de la Oficina Mayor del Ministerio de Educación, en fecha: '));

	$pdf->SetFont('Arial','B',12);
	$pdf->Write(5, fechaEspaniol($fechaaprobacion).'.');

	$pdf->SetFont('Arial','',11);
	$pdf->ln(10); 
	$pdf->Write(5, utf8_decode('Curso aprobado en el Centro de Estudio: '));

	$pdf->SetFont('Arial','B',11);
	$pdf->Write(5, $centroeducativo_id);

	$pdf->SetFont('Arial','',11);
	$pdf->Write(5, utf8_decode(' del Municipio de '));


	$pdf->Write(5, $municipio_id);

	$pdf->Write(5, utf8_decode(', Prov. '));



	$pdf->Write(5, utf8_decode($provincia_id).'.');
	

	$pdf->ln(10);
	$pdf->Write(5, utf8_decode('La presente certificación se expide a solicitud de la parte interesada para los fines que fuere de utilidad.'));

	$pdf->ln(10);
	$pdf->Write(5, utf8_decode('Dada en la Ciudad y Municipio de San Francisco de Macorís, '. $provincia_id.' el día '. fechaEspaniol($fecha)).'.');

	//$pdf->Write(5, utf8_decode($fechaentrega));

	$pdf->ln(25);

	//$pdf->cell(0,5, utf8_decode('CERTIFICA:'),0,0,'C');
	//$pdf->cell(0,5, utf8_decode('____________________________'),0,0,'C');
	
	$pdf->ln(5);

	$pdf->SetFont('Arial','B',12);
	$pdf->cell(0,-10, utf8_decode('Mariel Altagracia Santos Mora, MA'),0,0,'C');

	$pdf->ln(5);
	$pdf->SetFont('Arial','',10);
	$pdf->cell(0,-10, utf8_decode('Directora Regional de Educación 07'),0,0,'C');
	$pdf->ln(5);
	$pdf->SetFont('Arial','',10);
	$pdf->cell(0,-10, utf8_decode('San Francisco de Macorís, R.D.'),0,0,'C');

	$pdf->SetFont('Arial','I',10);
	$pdf->ln(5);
	
	$pdf->Image('images/piedepagina.png',0,257,-210,'C');
	//$pdf->adaptiveResizeImage(600,100);


$pdf->ln(10);
	$pdf->Output();
?>
