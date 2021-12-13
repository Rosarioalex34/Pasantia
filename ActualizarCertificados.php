
<HTML> 
	<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	<title>Registro</title>
	
</head>
<body>
	<?php
		$server = "localhost";
		$usuario = "root";
		$contrasena = "";
		$bd = "joanwgeh_certificaciones";


		$conexion = mysqli_connect($server, $usuario, $contrasena, $bd) or die ("Error en la conexión");

		$ID = $_POST["txtID"];
		$nocertificado = $_POST["txtNoCertificado"]; 
		$nombre_apellido = $_POST["txtNombre"];
		$centro = $_POST["txtcentro"];
		$anolectivo = $_POST["txtAnioElectivo"];
		$fecha = $_POST["txtfecha"];
		$libro = $_POST["txtLibro"];
		$folio = $_POST["txtFolio"];
		$provincia = $_POST["txtprovincia"];
		$municipio = $_POST["txtmunicipio"];
	
		
		
		
		$Actualizar = "UPDATE `dato1` SET `No_Certificado`='$nocertificado', `Nombre_Apellidos`='$nombre_apellido', `Centro`='$centro', `AnoLectivo`='$anolectivo', `Fecha`='$fecha', `Libro`='$libro', `Folio`='$folio', `Provincia`='$provincia', `Municipio`='$municipio' WHERE ID=$ID";
		
		

		$resultado = mysqli_query($conexion, $Actualizar) or die("Error al Modificar los registros");


		mysqli_close($conexion);
		echo "Datos insertados correctamente";

			
		//header('Location: frmGenerarCertificado.php');
	header('Location:COPIAGENERARCERTIFICADO.php');

		
		

	?>

</body>
</HTML>