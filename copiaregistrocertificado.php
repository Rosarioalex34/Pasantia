<HTML> 
	<head>
	<title>Registro</title>
	<style type="text/css" href=></style>
</head>
<body>
	<CENTER>
			<IMG SRC="Imagenes/logoMinisterioEducacionRegional07 - copia.png">
 <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    


	<br><br>
<?php //echo $numeroCertificado; ?> 
	<h1>Desea Realizar otros procesos</h1>
	<br>
	
<br/> <br/>
	<form action="pdf/index2.php" method="POST">
						
			
			
			<input type="submit" class="btn btn-primary" value="Generar Ahora" name="btnGenerar">
			<br/> <br/>
			<input type="text" name="NoCertificado" id="$numeroCertificado" class="form-control" placeholder="No_Certificado"value="<?php echo $numeroCertificado; ?>">
			<br></br>
			<a href = "frmCertificado.php"> <input type="submit" value="Volver y Registrar Nuevo Certificado" class="btn btn-primary" name="btnRegistrar"> </a>
			<br></br>
			<a href = "frmGenerarCertificado.php"> 

		<input type="submit" class="btn btn-primary" value="Ir a Generar Certificacion" name="btnGenerar">
		 </a>
<p></p>
	<a href = "index.php"> <input type="submit" value="Volver al Menú Principal" class="btn btn-primary"name="btnRegistrar"> </a>	
		</form>
						
		</form>  
	

</body>
</HTML>