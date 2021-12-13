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
	<title>Generar Certificado</title>
	<?php include "header.php" ?>
    <script src="js/funcionesk.js"></script>
    <script src="js/funciondos.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">

    <script>
			$(document).ready( function () {
			    $('#tabla1').DataTable({
			        "lengthMenu": [ 50, 75, 100, 200, 500 ],
			        "paging": true,
			        "lengthChange": false,
			        "pageLength": 50,
			        language: {
					        search: "Buscar:",
					        info: "_START_ hasta _END_ de _TOTAL_ registros",
					        paginate: {
					            first:      "Primera",
					            previous:   "Atrás",
					            next:       "Siguiente",
					            last:       "Atrás"
					        },
					    }
			    });
			} );

	</script> 
</head>
<body>
	<div class="bg1">
	  <div class="main-wrapp">
	  	<?php include "nav.php" ?>
	  			<div class="contentBoxMaster">
            	<div class="contentBoxMasterBox1">                                        
                    <div class="contentMaster">
                    
                    <div class="panelSuperior">
                    	<h2>Sistema de Registro de Certificaciones de Estudios</h2>
                        <h3>Regional de Educación 07 SFM</h3>
                    </div><!--end panelSuperior-->
                    
                    <div class="clr"></div>

                    </div><!--end contentMaster-->
                </div><!--end contentBoxMasterBox1-->
            </div><!--end contentBoxMaster-->


		<div class="row">
			<div class="col-sm-12">
				<table id="tabla1" class="display" style="width:100%; font-size: 12px;">
					<thead>
						<tr>
							<th>#</th>
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
								$ID=$dato1['ID'];
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

							<td><button class="btn btn-warning glyphicon glyphicon-user" data-toggle="modal" data-target="#idmodificarcertificado" onclick="addID('<?php echo $ID ?>');
							add('<?php echo $No_Certificado ?>');
							addnombre('<?php echo $Nombre_Apellidos ?>');
							addCentro('<?php echo $Centro ?>');
							addAnoLectivo('<?php echo $AnoLectivo ?>');
							addFecha('<?php echo $Fecha ?>');
							addLibro('<?php echo $Libro ?>');
							addFolio('<?php echo $Folio ?>');
							addMunicipio('<?php echo $Municipio ?>');
							addProvincia('<?php echo $Provincia ?>') ">Editar</button></td>
							<td><button class="btn btn-warning glyphicon glyphicon-user" onclick="agrega('<?php echo $No_Certificado  ?>')">Agregar</button></td>
							
						</tr>
							<?php } ?>
					</tbody>
				</table>
				
			</div>
			
		</div>

		<!-- Modal  para MODIFICAR los registros-->
<div class="modal fade" id="idmodificarcertificado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-xs" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Actualización de Estudiantes</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<form action="ActualizarCertificados.php" method="POST">
					<div class="form-group">
						<div class="container">
							<div class="row"> No. Certificado:
								<br/>
								<input type="text" REQUIRED name="txtNoCertificado" id="txtNoCertificado" class="form-control" placeholder="" value="">
								<br/> Nombre y Apellidos:
								<br/>
								<input type="text" size="" maxlength="" REQUIRED name="txtNombre" id="txtNombre" class="form-control" placeholder="" value="">
								<br/> Centro Educativo:
								<br/>
								<input type="text" size="" maxlength="" REQUIRED name="txtcentro" id="txtcentro" class="form-control" placeholder="" value="">
								<br/> Año Electivo:
								<br/>
								<input type="text" name="txtAnioElectivo" id="txtAnioElectivo" class="form-control" value="">
								<br/> Fecha:
								<br/>
								<input type="Date" name="txtfecha" id="txtfecha" class="form-control" value="">
								<br/> Libro:
								<br/>
								<input type="text" REQUIRED name="txtLibro" id="txtLibro" class="form-control" placeholder="" value="">
								<br/> Folio:
								<br/>
								<input type="text" REQUIRED name="txtFolio" id="txtFolio" class="form-control" placeholder="" value="">
								<br/> Provincia:
								<br/>
								<input type="text" REQUIRED name="txtprovincia" id="txtprovincia" class="form-control" placeholder="" value="">
								<br/> Municipio:
								<br/>
								<input type="text" REQUIRED name="txtmunicipio" id="txtmunicipio" class="form-control" placeholder="" value="">
								<br/> ID:
								<input type="text" REQUIRED name="txtID" id="txtID" class="form-control" placeholder="" value="" readonly="">
								<br/>
								<CENTER>
									<input type="submit" class="btn btn-primary" value="Actualizar" name="btnactualizar">
								</CENTER>
				<br/>
				<br/> </div>
				<div class="modal-footer">
					<!--   <input type="submit" value="Guardar" name="btnGuardar"> -->
				</div>
				</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<?php include "footer.php" ?>
</body>
</html>
