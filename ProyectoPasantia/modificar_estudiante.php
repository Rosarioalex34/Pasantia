
<HTML> 
	<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	<title>Registro</title>
</head>
<body>
	<?php
		$server = "localhost";
		$usuario = "root";
		$contrasena = "";


		$conexion = mysqli_connect($server, $usuario, $contrasena, $bd) or die ("Error en la conexión");

		//$id = $_POST["txtid"]; 
	
		$nombre = $_POST["txtnombre"];
		$apellidos = $_POST["txtapellido"];
		$fechanacimiento = $_POST["txtfechanacimiento"];
		$sexo = $_POST["cmbSexo"];
		
		
		$insertar = "INSERT INTO `estudiante` ( `nombre`, `apellidos`, `fechanacimiento`, `sexo`) VALUES ( '$nombre', '$apellidos', '$fechanacimiento', '$sexo');";

		$resultado = mysqli_query($conexion, $insertar) or die("Error al insertar los registros");

		mysqli_close($conexion);
		echo "Datos insertados correctamente";

			
		header('Location: frmEstudiante.php');


		
		

	?>

</body>
</HTML>