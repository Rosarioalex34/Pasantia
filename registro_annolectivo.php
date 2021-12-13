
<HTML> 
	<head>
	<title>Registro</title>
</head>
<body>
	<?php
		
		include ("conexion.php");
		$id = ""; 
	
		$inicio = $_POST["txtinicio"];
		$fin = $_POST["txtfin"];
		
		$insertar = "INSERT into annolectivo (inicio,fin) values ('$inicio','$fin')";

		$resultado = mysqli_query($conexion, $insertar) or die("Error al insertar los registros");

		mysqli_close($conexion);
		echo "Datos insertados correctamente";
	?>


</body>
</HTML>