<?php
//	$mysqli = new mysqli('localhost','root','','bdcertificados');
	$mysqli = new mysqli('localhost','root','','joanwgeh_certificaciones');

	$query = $mysqli-> query ("SELECT * FROM `Dato1`");
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro de Certificados</title>
<?php include "header.php" ?>
	 
  	<script src="js/funciones2.js"></script>
    <!--script src="js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="js/jquery.dataTables.min.css"-->
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
										<th>Registrar</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<?php  
										while ($Dato1 = mysqli_fetch_array($query)) {
											$No_Certificado=$Dato1['No_Certificado'];
											$Nombre_Apellidos= $Dato1['Nombre_Apellidos'];
											$Centro= $Dato1['Centro'];
											$AnoLectivo= $Dato1['AnoLectivo'];
											$Fecha= $Dato1['Fecha'];
											$Libro= $Dato1['Libro'];
											$Folio= $Dato1['Folio'];
											$Municipio= $Dato1['Municipio'];
											$Provincia= $Dato1['Provincia'];
											$cadena = $No_Certificado."||".$Nombre_Apellidos."||".$Centro."||".$AnoLectivo. "||".$Fecha. "||".$Libro. "||".$Folio. "||".$Municipio. "||".$Provincia;
											
										?>
										<td><?php echo $Dato1['No_Certificado']; ?></td>
										<td><?php echo $Dato1['Nombre_Apellidos']; ?></td>
										<td><?php echo $Dato1['Centro']; ?></td>
										<td><?php echo $Dato1['AnoLectivo']; ?></td>
										<td><?php echo $Dato1['Fecha']; ?></td>
										<td><?php echo $Dato1['Libro']; ?></td>
										<td><?php echo $Dato1['Folio']; ?></td>
										<td><?php echo $Dato1['Municipio']; ?></td>
										<td><?php echo $Dato1['Provincia']; ?></td>
										
										<td><button class="btn btn-warning glyphicon glyphicon-user" data-toggle="modal" data-target="#modalEdicion" onclick="Dato1('<?php echo $cadena?>')">Nuevo</button></td>
										
									</tr>
										<?php } ?>
								</tbody>
							</table>
							
						</div>
						
					</div>


		<!-- Modal  para editar los registros-->
		<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-xl" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="myModalLabel"><h2>Registro de Certificados</h2></h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<form action="registro_certificado.php" method="POST">
							<div class="form-group">
								<div class="container">
									<div class="row"> Nombre y Apellidos:
										<br/>
										<input type="text" size="" maxlength="" REQUIRED name="txtNombre" class="form-control" placeholder="Nombre y Apellidos" value="">
										<br/> No. Certificado:
										<br/>
										<input type="text" REQUIRED name="txtNoCertificado" id="txtNoCertificado" class="form-control" placeholder="Numero de Certificado" value="">
										<br/> Centro Educativo:
										<br/>
										<select REQUIRED name="cmbCentroEducativo" class="form-control">
											<option value="0">Seleccione Centro:</option>
											<?php
												$query = $mysqli-> query ("SELECT * FROM centroeducativo");
												while ($valores = mysqli_fetch_array($query)) {
													//$curso = $valores[abreviatura]." - ". $valores[nombre];
													echo '<option value = "'.$valores[nombre].'">'.$valores[nombre].'</option>';
												}
											?>
										</select>
										<br/> Año Electivo:
										<br/>
										<input type="text" REQUIRED name="txtAnioElectivo" class="form-control" value="">
										<br/> Fecha:
										<br/>
										<input type="date" REQUIRED name="txtfecha" class="form-control" value="">
										<br/> Libro:
										<br/>
										<input type="text" REQUIRED name="txtLibro" class="form-control" placeholder="Libro..." value="">
										<br/> Folio:
										<br/>
										<input type="text" REQUIRED name="txtFolio" class="form-control" placeholder="Página..." value="">
										<br/> Provincia:
										<br/>
										<select REQUIRED name="cmbProvincia" class="form-control">
											<option value="0">Seleccione una Provincia:</option>
											<?php
												$query = $mysqli-> query ("SELECT * FROM provincia");
												while ($valores = mysqli_fetch_array($query)) {
													echo '<option value = "'.$valores[nombre].'">'.$valores[nombre].'</option>';
												}
											?>
										</select>
										<br/> Municipio:
										<br/>
										<select REQUIRED name="cmbMunicipio" class="form-control">
											<option value="0">Seleccione un Municipio:</option>
											<?php
												$query = $mysqli-> query ("SELECT * FROM municipio");
												while ($valores = mysqli_fetch_array($query)) {
													echo '<option value = "'.$valores[nombre].'">'.$valores[nombre].'</option>';
												}
											?>
												<br>
												<br>
												<input type="submit" name="btnGuardar" class="submit btn btn-success" class="form-control" value="Guardar" /> </div>
								</div>
							</div>
						</form>
					</div>
		      <div class="modal-footer">
		      <!--   <button type="button" class="btn btn-primary" data-dismiss="modal" id="actualizaDatos">Guardar</button> -->
		        
		      </div>
		    </div>
		  </div>
		</div>

  </div><!--end main-wrapp-->
</div><!--end bg1-->
<?php include "footer.php" ?>
</body>
</html>