<?php

$myspli = mysqli('localhost','root','','joanwgeh_certificaciones');
if($myspli->connect_error){
	die('Error en la conexion' . $mysqli->connect_error);
}
?>