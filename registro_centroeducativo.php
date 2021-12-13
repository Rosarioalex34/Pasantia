
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

		$id = "";
		$nombre = $_POST["txtnombre"];
		$telefono = $_POST["txttelefono"];
		$direccion = $_POST["txtdireccion"];
		
		$fechafundacion = $_POST["txtfechafundacion"];
		$municipio_id = $_POST["txtmunicipio_id"];
		

		$insertar = "INSERT into centroeducativo values ('$id','$nombre','$direccion', '$telefono','$fechafundacion','$municipio_id')";

		$resultado = mysqli_query($conexion, $insertar) or die("Error al insertar los registros");

		mysqli_close($conexion);
		echo "Datos insertados correctamente";

	?>

</body>
</HTML>