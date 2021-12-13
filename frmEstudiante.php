<?php
//	$mysqli = new mysqli('localhost','root','','bdcertificados');
	$mysqli = new mysqli('localhost','root','','joanwgeh_certificaciones');
	$query = $mysqli-> query ("SELECT * FROM `estudiante`");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulario de Estudiantes</title>
	<?php include "header.php" ?>
	
  <script src="js/fmandar.js"></script>
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


    <h3>Registro de Estudiantes</h3>	<br/>


		<button class="btn btn-primary" data-toggle="modal" data-target="#modalEdicion" onclick="estudiante('<?php echo $cadena?>')">Nuevo Estudiante</button>

		<div class="row">
						<div class="col-sm-12">
							<table  id="tabla1" class="display" style="width:100%; font-size: 12px;">
								<thead>
									<tr>
										<th>ID</th>
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Sexo</th>

										<th>Fecha de Nacimiento</th>
										<th>Editar</th>
										

									</tr>
								</thead>
								<tbody>
									<tr>
										<?php  
										while ($estudiantes = mysqli_fetch_array($query)) {
											$id=$estudiantes['id'];
											$nombre= $estudiantes['nombre'];
											$Apellido= $estudiantes['apellidos'];
											$sexo=$estudiantes['sexo'];
											$fechanacimiento= $estudiantes['fechanacimiento'];
											//$cadena = $id."||".$nombre;//."||".$Apellido;
											
										?>
										<td><?php echo $id; ?></td>
										<td><?php echo $nombre; ?></td>
										<td><?php echo $Apellido; ?></td>
										<td><?php echo $sexo; ?></td>
										<td><?php echo $fechanacimiento; ?></td>
										
										<td><button class="btn btn-warning glyphicon glyphicon-user" data-toggle="modal" data-target="#idmodificar" onclick="">Editar</button></td>
										

										

									</tr>
										<?php } ?>
								</tbody>
							</table>
							
						</div>
						
					</div>

		


<!-- Modal  para editar los registros-->
<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  <div class="modal-dialog modal-xs" role="document">
    <div class="modal-content">
      <div class="modal-header">
      	<h4 class="modal-title" id="myModalLabel"><h2>Registrar Nuevo Estudiante</h2></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
		<form action="registro_estudiantes.php" method="POST"><!--<input class="form-control" type="text"  name="txtid" placeholder="Id..." value=""><br/> <br/>-->
			
			 	 
			

			Nombre <input class="form-control" type="text" REQUIRED name="txtnombre" placeholder="Nombre..." value=""> <br/> 

			Apellido <input class="form-control" type="text" REQUIRED name="txtapellido" placeholder="Apellido..." value=""> <br/> 

			Sexo: <select class="form-control" name="cmbSexo" id="cmbSexo">
				<option>Masculino</option>
				<option>Femenino</option>
			</select>

			 <br/> 

			Fecha Nacimiento <br/> <input type="date" name="txtfechanacimiento">

				<br/> <br/>

	<CENTER><input type="submit" class="submit btn btn-success" value="Guardar" name="btnGuardar"></CENTER>		



		</form><br/> <br/>
      </div>
      <div class="modal-footer">
      <!--   <input type="submit" value="Guardar" name="btnGuardar"> 
      <button type="button" class="btn btn-primary" data-dismiss="modal" id="actualizaDatos">Guardar</button> -->
        
      </div>
    </div>
  </div>
</div>

<!-- Modal  para MODIFICAR los registros-->
<script src="js/funciondos.js"></script><!--borrame-->
<div class="modal fade" id="idmodificar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  <div class="modal-dialog modal-xs" role="document">
    <div class="modal-content">
      <div class="modal-header">
      	<h4 class="modal-title" id="myModalLabel"><h2>Actualización de Estudiantes</h2></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
		<form action="modificar_estudiante.php" method="POST"><!--<input class="form-control" type="text"  name="txtid" placeholder="Id..." value=""><br/> <br/>-->
			
			 	 
			Id <input class="form-control" type="text"  name="txtidm" placeholder="" value="">
			<br>

			Nombre <input class="form-control" type="text"  name="txtnombrem" placeholder="" 
			value="" > <br/> 
			

			Apellido <input class="form-control" type="text"  name="txtapellidom" placeholder="" value=""> <br/> 


			Fecha Nacimiento <input class="form-control" type="date"  name="txtfecha" placeholder="" value=""> <br/>

			Sexo <select class="form-control" name=txtsexom id="txtsexom">
				<option>Masculino</option>
				<option>Femenino</option>
			</select>

            
			  

			 	<br/> <br/>
<CENTER><input type="submit" class="btn btn-primary" value="Actualizar" name="btnactualizar"></CENTER>			



		</form><br/> <br/>
      </div>
      <div class="modal-footer">
      <!--   <input type="submit" value="Guardar" name="btnGuardar"> -->
        
      </div>
    </div>
  </div>
</div>

</div>
</div>

<?php include "footer.php" ?>
</body>
</html>