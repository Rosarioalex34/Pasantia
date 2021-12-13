<?php
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

		<h3>Registro de Municipio</h3>	<br/>

		<form action="registro_municipio.php" method="POST">
			
			Nombre: <br/> <input type="text" REQUIRED name="txtnombre" class="form-control"placeholder="Nombre..." value=""> <br/> <br/>

			<input type="text" REQUIRED name="" placeholder="Id Provincia..."class="form-control" value="">	<br/> <br/>

			<select REQUIRED name="txtprovincia_id"class="form-control">
				<option value="0">Seleccione una Provincia:</option>
				<?php
					$query = $mysqli-> query ("SELECT * FROM provincia");
					while ($valores = mysqli_fetch_array($query)) {
						echo '<option value = "'.$valores[id].'">'.$valores[nombre].'</option>';
					}
				?>
			</select>
			<br/> <br/>

			<input type="submit" value="Guardar" name="btnGuardar"class="submit btn btn-success">
				
		</form>



</div>
</div>		
		
<?php include "footer.php" ?>
</body>
</html>