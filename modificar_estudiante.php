
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

		$id = $_POST["txtidm"]; 
	
		$nombre = $_POST["txtnombrem"];
		$apellidos = $_POST["txtapellidom"];
		$fechanacimiento = $_POST["txtfecha"];
		$sexo = $_POST["txtsexom"];
		
		
		
		$insertar = "UPDATE `estudiante` SET `nombre`='$nombre', `apellidos`='$apellidos', `fechanacimiento`='$fechanacimiento', `sexo`='$sexo' WHERE id=$id";
		
		

		$resultado = mysqli_query($conexion, $insertar) or die("Error al Modificar los registros");


		mysqli_close($conexion);
		echo "Datos insertados correctamente";

			
		header('Location: frmEstudiante.php');


		
		

	?>

</body>
</HTML>