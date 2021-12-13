<!DOCTYPE html>
<html>
<head>
	<title>Formulario Año Lectivo</title>
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

		<h3>Registro de Año Lectivo</h3>	<br/>

		<form action="registro_annolectivo.php" method="POST">
			
			Año Inicio <br/> <input type="text" REQUIRED name="txtinicio" placeholder="Inicio..." value=""> <br/> <br/>

			Año Fin <br/> <input type="text" REQUIRED name="txtfin" placeholder="Fin..." value="">	<br/> <br/>
			
			<input type="submit" value="Guardar" name="btnGuardar" class="btn btn-primary">
			<br></br>
		</form>



</div>
</div>		
		
<?php include "footer.php" ?>
</body>
</html>
