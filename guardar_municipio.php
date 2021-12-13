<?php
	
	include ("conexion.php");

	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$provincia_id = $_POST['provincia_id'];

	$query ="INSERT INTO municipio(id, nombre, provincia_id) VALUES('$id', $nombre', '$provincia_id')";

	$resultado = $conexion->query($query);

	if($resultado){
		echo "Insercion exitosa";
	}
	else {
		echo "Insercion fallida";
	}

?>