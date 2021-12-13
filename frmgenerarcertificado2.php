<?php
/*
	<input type="text" name="txtId" placeholder="Id..."> <br/> <br/>
	<input type="text" name="txtId" placeholder="Id..."> <br/> <br/>
*/
	$mysqli = new mysqli('localhost','root','J@yc17cyj25','joanwgeh_certificaciones');

	$query = $mysqli-> query ("SELECT * FROM `dato1`");
					
//joanwgeh_certificaciones
	
?>
<!DOCTYPE html>
<html>
<head>
     <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Generar Certificado</title>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="js/funciones.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="js/jquery.dataTables.min.css">

    <script>
			$(document).ready( function () {
    		$('#tabla1').DataTable();
		} );

	</script> 
</head>
<body>
    <div class="container">
	<center>
		<br/>
		<IMG SRC="Imagenes/logoMinisterioEducacionRegional07 - copia.png"> 	
		<br/> <br/>
		
		<h3>Generar Certificado</h3>
		<br/> <br/>

		<form action="pdf/index.php" method="POST">
						
			<input type="text" name="NoCertificado" id="txtnumeroCertificado" class="form-control" placeholder="No_Certificado">
			<br/> <br/>
			<input type="submit" class="btn btn-primary" value="Generar" name="btnGenerar">
			<br/> <br/>
			
			
						
		</form>

		
		</center>

		<div class="row">
			<div class="col-sm-12">
				<table id="tabla1" class="table table-hover table-condensed">
					<thead>
						<tr>
							<th>No_Certificado</th>
							<th>Nombre_Apellidos</th>
							<th>Centro</th>
							<th>AnoLectivo</th>
							<th>Fecha</th>
							<th>Libro</th>
							<th>Folio</th>
							<th>Municipio</th>
							<th>Provincia</th>
							
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php  
							while ($estudiantes = mysqli_fetch_array($query)) {
								$id=$estudiantes['No_Certificado'];
							?>
							<td><?php echo $estudiantes['No.Certificado']; ?></td>
							<td><?php echo $estudiantes['Nombre_Apellidos']; ?></td>
							<td><?php echo $estudiantes['Centro']; ?></td>
							<td><?php echo $estudiantes['AnoLectivo']; ?></td>
							<td><?php echo $estudiantes['Fecha']; ?></td>
							<td><?php echo $estudiantes['Libro']; ?></td>
							<td><?php echo $estudiantes['Folio']; ?></td>
							<td><?php echo $estudiantes['Municipio']; ?></td>
							<td><?php echo $estudiantes['Provincia']; ?></td>
							
							<!-- <td><button class="btn btn-warning glyphicon glyphicon-user" onclick="agrega('<?php echo $id ?>')">Agregar</button></td> -->
							
						</tr>
							<?php } ?>
					</tbody>
				</table>
				
			</div>
			
		</div>
</body>
</html>


	
</script>