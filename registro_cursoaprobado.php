
<HTML> 
	<head>
	<title>Registro</title>
</head>
<body>
	<?php
		include ("conexion.php");

		$id = ""; 
	
		$nombre = $_POST["txtnombre"];
		$abreviatura = $_POST["txtabreviatura"];
		
		
		$insertar = "INSERT into cursoaprobado (nombre,abreviatura) values ('$nombre','$abreviatura')";

		$resultado = mysqli_query($conexion, $insertar) or die("Error al insertar los registros");

		mysqli_close($conexion);
		echo "Datos insertados correctamente";





	?>

</body>
</HTML>