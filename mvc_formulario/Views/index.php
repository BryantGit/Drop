<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
    <form method="post">
    	<h1>¡Suscribete!</h1>
		<label for="nombre completo"></label>
    	<input type="text" name="nombre" placeholder="Nombre completo">
		<label for="">Edad</label>
    	<input type="number" name="edad" placeholder="Edad">
		<label for="">WhatsApp</label>
		<input type="tel" name="wats" placeholder="WhatsApp">
		<label for="">Correo electronico</label>
		<input type="email" name="email" placeholder="Email">
		<label for="">Facebook</label>
		<input type="text" name="fb" placeholder="Facebook">
		<label for="">Domicilio</label>
		<input type="text" name="domicilio" placeholder="Domicilio">
		<label for="">Universidad a la que deceas ingresar</label>
			<select name="universidad" id="">
				<option value="">--Selecciona--</option>
				<option value="UNAM">UNAM</option>
				<option value="IPN">IPN</option>
				<option value="UDEG">UDEG</option>
				<option value="UANL">UANL</option>
				<option value="UASLP">UASLP</option>
			</select>
		<label for="">Carrera</label>
		<input type="text" name="carrera" placeholder="Carrera">
		<label for="">Escuela de procedencia</label>
		<input type="text" name="escuela" placeholder="Escuela">
		<label for="">Horario</label>
		<select name="horario" id="">
				<option value="">--Selecciona--</option>
				<option value="Matutino">Matutino (de 9:00am a 12:00pm)</option>
				<option value="Vespertino">Vespertino(de 4:00pm a 7:00pm)</option>
				<option value="Sabatino">Sabatino(de 8:00am a 4:00pm)</option>
			</select>
		<label for="">Cuentanos porque deceas ingresar</label>
		<input type="text" name="cuentanos" placeholder="cuentanos">
		<label for="">Como supiste de thinkers</label>
		<input type="text" name="como__supiste" placeholder="Como__supiste">
		<label for="">Nombre del padre o tutor</label>
		<input type="text" name="nombre__padre" placeholder="Nombre__padre">
		<label for="">Telefono del padre o tutor</label>
		<input type="tel" name="telefono__padre" placeholder="Telefono__padre">
		<label for="">Acuerdo legal:</label>
		<input type="checkbox" name="checkbox" placeholder="">
		<p>Al enviar mi ficha, acepto la Política de Privacidad, así como los Términos y Condiciones de Thinkers.</p>
    	<input type="submit" name="register">
    </form>
	
	<?php 
        include("../Controller/registrar.php");
    ?>
        
</body>
</html>