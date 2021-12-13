<?php
/*
	<input type="text" name="txtId" placeholder="Id..."> <br/> <br/>
	<input type="text" name="txtId" placeholder="Id..."> <br/> <br/>
*/
	$mysqli = new mysqli('localhost','joanwgeh_hometrix','J@yc17cyj25','joanwgeh_certificaciones');
?>
<!DOCTYPE html>
<html>
<head>
     <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Formulario Provincia</title>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
	<center>
		<br/>
		<IMG SRC="Imagenes/logoMinisterioEducacionRegional07 - copia.png"> 	
		<br/> <br/>
		
		<h3>Formulario de Provincia</h3>
		<br/> <br/>

		<form action="registro_provincia.php" method="POST">
						
			<input type="text" name="txtNombre" class="form-control" placeholder="Nombre...">
			<br/> <br/>
			<input type="submit" class="btn btn-primary" value="Guardar" name="btnGuardar">
			
		</form>
	</center>
</body>
</html>