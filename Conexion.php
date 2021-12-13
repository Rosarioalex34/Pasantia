

<?php
	//Servidor, Usuario, Contraseña, nombre de la base de datos
	$conexion = new mysqli('localhost','root','J@yc17cyj25','joanwgeh_certificaciones');
	
	if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
?>