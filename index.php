<?php  
 $mysqli = new mysqli('localhost','root','','joanwgeh_certificaciones');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="[SE DEBE ESPECIFICAR EL LENGUAJE]" lang="es_ES" dir="[SE DEBE ESPECIFICAR LA DIRECCION // ltr (left to right) o rtl (right to left)]">
<head>
<title>Registro de Certificados</title>
<?php include "header.php" ?>
</head>
<body>
	<div class="bg1">
        <div class="row main-wrapp">
        	
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

            <div class="card-group">
              <div class="card" style="margin:10px 10px 10px 10px; padding:10px 10px 10px 10px; text-align: center; ">
                <img src="images/Registro de certificado.png" style="width:150px;height:150px; align-self: center;" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text"></p>
                    <a class="btn btn-info btn-lg" href="frmCertificado.php" style="color: white;" role="button">Registrar Certificacion</a>
                </div>
              </div>
              <div class="card" style="margin:10px 10px 10px 10px; padding:10px 10px 10px 10px; text-align: center; ">
                <img src="images/Generar certificacion.png" style="width:150px;height:150px; align-self: center;" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text"><p>
                    <a class="btn btn-info btn-lg" href="COPIAGENERARCERTIFICADO.php" style="color: white;" role="button">Generar Certificación</a>
                </div>
              </div>
              <div class="card" style="margin:10px 10px 10px 10px; padding:10px 10px 10px 10px; text-align: center; ">
                <img src="images/municipalidad.png" style="width:150px;height:150px; align-self: center;" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text"></p>
                    <a class="btn btn-info btn-lg" href="frmMunicipio.php" style="color: white;" role="button">Municipio</a>
                </div>
              </div>
            </div>

            <div class="card-group">
              <div class="card" style="margin:10px 10px 10px 10px; padding:10px 10px 10px 10px; text-align: center; ">
                <img src="images/Registrar provincia.png" style="width:150px;height:150px; align-self: center;" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text"></p>
                    <a class="btn btn-info btn-lg" href="frmProvincia.php" style="color: white;" role="button">Registrar Provincia</a>
                </div>
              </div>
              <div class="card" style="margin:10px 10px 10px 10px; padding:10px 10px 10px 10px; text-align: center; ">
                <img src="images/Curso aprobado.png" style="width:150px;height:150px; align-self: center;" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text"><p>
                    <a class="btn btn-info btn-lg" href="frmCursoAprobado.php" style="color: white;" role="button">Registrar Curso Aprobado</a>
                </div>
              </div>
              <div class="card" style="margin:10px 10px 10px 10px; padding:10px 10px 10px 10px; text-align: center; ">
                <img src="images/Año lectivo.png" style="width:150px;height:150px; align-self: center;" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text"></p>
                    <a class="btn btn-info btn-lg" href="frmAnnoLectivo.php" style="color: white;" role="button">Registrar Año Lectivo</a>
                </div>
              </div>
            </div>

            <div class="card-group">
              <div class="card" style="margin:10px 10px 10px 10px; padding:10px 10px 10px 10px; text-align: center; ">
                <img src="images/Centro educativo.png" style="width:150px;height:150px; align-self: center;" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text"></p>
                    <a class="btn btn-info btn-lg" href="frmCentroEducativo.php" style="color: white;" role="button">Centro Educativo</a>
                </div>
              </div>
              <div class="card" style="margin:10px 10px 10px 10px; padding:10px 10px 10px 10px; text-align: center; ">
                <img src="images/Mantenimiento de estudiantes.png" style="width:150px;height:150px; align-self: center;" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text"></p>
                    <a class="btn btn-info btn-lg" href="frmEstudiante.php" style="color: white;" role="button">Mantenimiento de Estudiantes</a>
                </div>
              </div>
              <div class="card" style="margin:10px 10px 10px 10px; padding:10px 10px 10px 10px; background: #F6F6F6; border-color:#F6F6F6;">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text"></p>
                  <p class="card-text"><small class="text-muted"></small></p>
                </div>
              </div>
            </div>

        </div><!--end main-wrapp-->
    </div><!--end bg1-->
<?php include "footer.php" ?>    
</body>
</html>
