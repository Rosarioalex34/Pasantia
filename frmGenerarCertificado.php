<?php
/*
	<input type="text" name="txtId" placeholder="Id..."> <br/> <br/>
	<input type="text" name="txtId" placeholder="Id..."> <br/> <br/>
*/
	$mysqli = new mysqli('localhost','root','','joanwgeh_certificaciones');

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
	<!--Optional JavaScript -->
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

		<form action="pdf/index2.php" method="POST">
						
			<input type="text" name="NoCertificado" id="txtIdCertificado" class="form-control" placeholder="ID Certificado">
			<br/> 

			<input type="submit" class="btn btn-primary" value="Generar" name="btnGenerar">
			<br/> <br/>
			
		</form>
	<a href = "index.php"> <input type="submit" value="Volver al Menú Principal" class="btn btn-primary"name="btnvolver"> </a>	

		
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
										<th>Editar</th>
										<th>Seleccionar</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php  
							while ($dato1 = mysqli_fetch_array($query)) {
								$No_Certificado=$dato1['No_Certificado'];
								$Nombre_Apellidos= $dato1['Nombre_Apellidos'];
											$Centro= $dato1['Centro'];
											$AnoLectivo= $dato1['AnoLectivo'];
											$Fecha= $dato1['Fecha'];
											$Libro= $dato1['Libro'];
											$Folio= $dato1['Folio'];
											$Municipio= $dato1['Municipio'];
											$Provincia= $dato1['Provincia'];
							?>
							<td><?php echo $dato1['No_Certificado']; ?></td>
										<td><?php echo $dato1['Nombre_Apellidos']; ?></td>
										<td><?php echo $dato1['Centro']; ?></td>
										<td><?php echo $dato1['AnoLectivo']; ?></td>
										<td><?php echo $dato1['Fecha']; ?></td>
										<td><?php echo $dato1['Libro']; ?></td>
										<td><?php echo $dato1['Folio']; ?></td>
										<td><?php echo $dato1['Municipio']; ?></td>
										<td><?php echo $dato1['Provincia']; ?></td>

							<td><button class="btn btn-warning glyphicon glyphicon-user" data-toggle="modal" data-target="#idmodificarcertificado" onclick="')">Editar</button></td>
							<td><button class="btn btn-warning glyphicon glyphicon-user" onclick="agrega('<?php echo $No_Certificado  ?>')">Agregar</button></td>
							
						</tr>
							<?php } ?>
					</tbody>
				</table>
				
			</div>
			
		</div>

		<!-- Modal  para MODIFICAR los registros-->
<div class="modal fade" id="idmodificarcertificado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  <div class="modal-dialog modal-xs" role="document">
    <div class="modal-content">
      <div class="modal-header">
      	<h4 class="modal-title" id="myModalLabel"><h2>Actualización de Estudiantes</h2></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
      	<form action="ActualizarCertificados.php" method="POST">
		<form>
			      <div class="form-group">
            <div class="container">
  <div class="row">
  	
   
   No. Certificado: <br/> <input type="text" REQUIRED name="txtNoCertificado" id="txtNoCertificado" class="form-control"placeholder="" value=""> <br/> 

      	Nombre y Apellidos: <br/><input type="text" size="" maxlength="" REQUIRED name="txtNombre" class="form-control" placeholder="" value=""> <br/> 

    Centro Educativo:	<br/><input type="text" size="" maxlength="" REQUIRED name="txtcentro" class="form-control" placeholder="" value=""> <br/> 

  

      	Año Electivo: <br/> <input type="text" name="txtAnioElectivo" class="form-control" value="">
			<br/> 
	    			
    	Fecha: <br/> <input type="text" name="txtfecha" class="form-control" value="">
			<br/> 

						
			Libro: <br/> <input type="text" REQUIRED name="txtLibro" class="form-control"placeholder="" value=""> <br/>
			Folio: <br/> <input type="text" REQUIRED name="txtFolio" class="form-control"placeholder="" value=""> <br/> 

			Provincia: <br/> <input type="text" REQUIRED name="txtprovincia" class="form-control"placeholder="" value=""> <br/> 
			 

			Municipio: <br/> <input type="text" REQUIRED name="txtmunicipio" class="form-control"placeholder="" value="">

			 	<br/> 
			 	
<CENTER><input type="submit" class="btn btn-primary" value="Actualizar" name="btnactualizar"></CENTER>			



		</form><br/> <br/>
      </div>
      <div class="modal-footer">
      <!--   <input type="submit" value="Guardar" name="btnGuardar"> -->
        
      </div>
    </div>
  </div>
</div>
</body>
</html>


	
</script>