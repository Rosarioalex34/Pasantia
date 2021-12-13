 
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

		//$id = $_POST["txtId"];
		$nombre = $_POST["txtNombre"];

		$insertar = "INSERT into Provincia values ('$nombre')";

		$resultado = mysqli_query($conexion, $insertar) or die("Error al insertar los registros");

		mysqli_close($conexion);
		echo "Datos insertados correctamente";

	?>

</body>
</HTML>