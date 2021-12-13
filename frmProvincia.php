<?php
$conexion = new mysqli('localhost','root','','joanwgeh_certificaciones');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulario Provincia</title>
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

		<h3>Formulario de Provincia</h3>
		<br/> <br/>

		<form action="registro_provincia.php" method="POST">
						
			<input type="text" name="txtNombre" class="form-control" placeholder="Ingrese una Provincia...">
			<br/> <br/>
			<input type="submit" class="btn btn-primary" value="Guardar" name="btnGuardar">
			<br></br>
		</form>



</div>
</div>		
		
<?php include "footer.php" ?>
</body>
</html>
