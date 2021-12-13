<?php
//	$mysqli = new mysqli('localhost','root','','bdcertificados');
	$mysqli = new mysqli('localhost','root','','joanwgeh_certificaciones');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulario Centros Educativos</title>
	<?php include "header.php" ?>
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

		<h3>Registro de Centros Educativos</h3>	<br/>
		

		<form action="registro_centroeducativo.php" method="POST">
		
				
			
			Nombre del Centro <br/> <input type="text" class="form-control" REQUIRED name="txtnombre" placeholder="Nombre..." value=""> <br/>
			Telefono <br/> <input type="text" class="form-control"REQUIRED name="txttelefono" placeholder="Telefono..." value=""> <br/> 

			Dirección <br/> <input type="text" class="form-control"REQUIRED name="txtdireccion" placeholder="Direccion..." value="">	<br/> 

			Fecha Fundación <br/> <input type="text" class="form-control"REQUIRED name="txtfechafundacion" placeholder="Fecha fundacion..." value="">	<br/> 



			Municipio: <br/> <select REQUIRED name="txtmunicipio_id"class="form-control">
				<option value="0">Seleccione Municipio:</option>
				<?php
					$query = $mysqli-> query ("SELECT * FROM municipio");
					while ($valores = mysqli_fetch_array($query)) {
						echo '<option value = "'.$valores[id].'">'.$valores[nombre].'</option>';
					}
				?>
			</select> <br/> <br/>

			<CENTER>
			<input type="submit" value="Guardar" name="btnGuardar"class="submit btn btn-success">
			<br><br><br>
		</form>



</div>
</div>		
		
<?php include "footer.php" ?>
</body>
</html>
