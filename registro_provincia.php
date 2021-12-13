
<HTML> 
	<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	<title>Registro Provincia</title>
</head>
<body>
	<?php
		/*$server = "localhost";
		$usuario = "root";
		$contrasena = "";
		$bd = "joanwgeh_certificaciones";*/

		//$conexion = mysqli_connect($server, $usuario, $contrasena, $bd) or die ("Error en la conexión");
		include ("conexion.php");
		
		
		//$id = $_POST["txtId"];
		$nombre = $_POST["txtNombre"];
		//$id ="";

		$insertar = "INSERT into provincia (nombre) values ('$nombre')";

		$resultado = mysqli_query($conexion, $insertar) or die("Error al insertar los registros verificar la conexion a la base de datos");

		mysqli_close($conexion);
		echo "Datos insertados correctamente";

	?>

</body>
</HTML>