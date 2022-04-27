<?php 
include("../Model/con_db.php");

if (isset($_POST['register'])) { /*si presiona el boton registrar guarda la info en la bd*/ 
    if (strlen($_POST['nombre']) >= 1 /**sentencia que verifica si los campos estan vacios */
	&& strlen($_POST['edad']) >= 1
	&& strlen($_POST['wats']) >= 1
	&& strlen($_POST['email']) >= 1
	&& strlen($_POST['fb']) >= 1
	&& strlen($_POST['domicilio']) >= 1
	&& strlen($_POST['universidad']) >= 1
	&& strlen($_POST['carrera']) >= 1
	&& strlen($_POST['escuela']) >= 1
	&& strlen($_POST['horario']) >= 1
	&& strlen($_POST['cuentanos']) >= 1
	&& strlen($_POST['como__supiste']) >= 1
	&& strlen($_POST['nombre__padre']) >= 1
	&& strlen($_POST['telefono__padre']) >= 1
	&& isset($_POST['checkbox']) == true /*si no esta marcado el checkbox no guarda los datos*/
	) {
	    $nombre = trim($_POST['nombre']);
		$edad = trim($_POST['edad']);
		$wats = trim($_POST['wats']);
		$email = trim($_POST['email']);
		$fb = trim($_POST['fb']);
		$domicilio = trim($_POST['domicilio']);
		$universidad = trim($_POST['universidad']);
		$carrera = trim($_POST['carrera']);
		$escuela = trim($_POST['escuela']);
		$horario = trim($_POST['horario']);
		$cuentanos = trim($_POST['cuentanos']);
		$como__supiste = trim($_POST['como__supiste']);
	    $nombre__padre = trim($_POST['nombre__padre']);
		$telefono__padre = trim($_POST['telefono__padre']);
	    $fechareg = date("d/m/y");
	    /*$consulta = "INSERT INTO datos(nombre, email, fecha_reg) VALUES ('$nombre','$email','$fechareg')";*/
		$consulta = "INSERT INTO informacion_alu (nombre,edad,wats,email, fb,domicilio,uni,carrera,escuela,horario,cuentanos,como,nombre_padre,telefono_padre,fecha_reg)
		 VALUES ('$nombre','$edad','$wats','$email','$fb','$domicilio','$universidad','$carrera',
		 '$escuela','$horario','$cuentanos','$como__supiste','$nombre__padre','$telefono__padre','$fechareg')";

	    $resultado = mysqli_query($conexion,$consulta);
	    if ($resultado) {
	    	?> 
			
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
			
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
			
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}
?>