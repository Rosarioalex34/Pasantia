
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

		$id = $_POST["txtid"];
		$nombre = $_POST["txtnombre"];
		$provincia_id = $_POST["txtprovincia_id"];

		$insertar = "INSERT into municipio values ('$id','$nombre','provincia_id')";

		$resultado = mysqli_query($conexion, $insertar) or die("Error al insertar los registros");

		mysqli_close($conexion);
		echo "Datos insertados correctamente";

	?>

</body>
</HTML>