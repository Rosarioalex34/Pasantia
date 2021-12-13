
<HTML> 
	<head>
	<title>Registro</title>
</head>
<body>
	<?php
		$server = "localhost";
		$usuario = "root";
		$contrasena = "";
		$bd = "joanwgeh_certificaciones";

		$conexion = mysqli_connect($server, $usuario, $contrasena, $bd) or die ("Error en la conexión");

///////////////////////////////////
		//$conexion2 = mysqli_connect($server, $usuario, $contrasena, $bd) or die ("Error en la conexión");
////////////////////////////////////
		$nombre=$_POST["txtNombre"];
		$numeroCertificado=$_POST["txtNoCertificado"];
		$centroEducativo=$_POST["cmbCentroEducativo"];
		$anioElectivo=$_POST["txtAnioElectivo"];
		$fecha=$_POST["txtfecha"];
		$libro=$_POST["txtLibro"];
		$folio=$_POST["txtFolio"];
		$provincia=$_POST["cmbProvincia"];
		$municipio=$_POST["cmbMunicipio"];

		

		$insertar_certificado = "INSERT INTO `dato1`(`No_Certificado`, `Nombre_Apellidos`,`Centro`,`AnoLectivo`,`Fecha`,`Libro`,`Folio`, `Municipio`,`Provincia`) VALUES ($numeroCertificado,'$nombre','$centroEducativo','$anioElectivo','$fecha',$libro,$folio,'$municipio','$provincia');";

		


		$resultado_certificado = mysqli_query($conexion, $insertar_certificado) or die("Error al insertar los registros de certificados");
		mysqli_close($conexion);
		echo "Datos insertados correctamente...";	
		

		

	?>
 <CENTER>
			<IMG SRC="Imagenes/logoMinisterioEducacionRegional07 - copia.png">
 <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    


	<br><br>
<?php //echo $numeroCertificado; ?> 
	<h1>Desea Realizar otros procesos</h1>
	<br>
	
<br/> <br/>
	<form action="pdf/index2.php" method="POST">
						
			
			
			<input type="submit" class="btn btn-primary" value="Generar Ahora" name="btnGenerar">
			<br/> <br/>
			<input type="text" name="NoCertificado" id="$numeroCertificado" class="form-control" placeholder="No_Certificado"value="<?php echo $numeroCertificado; ?>">
			
		</form>
					<br>
			<a href = "frmCertificado.php"> <input type="submit" value="Volver y Registrar Nuevo Certificado" class="btn btn-primary" name="btnRegistrar"> </a>
			<br></br>
			<a href = "frmGenerarCertificado.php"> 

		<input type="submit" class="btn btn-primary" value="Ir a Generar Certificacion" name="btnGenerar">
		 </a>
<p></p>
	<a href = "index.php"> <input type="submit" value="Volver al Menú Principal" class="btn btn-primary"name="btnRegistrar"> </a>		
		</form> 

</body>
</HTML>