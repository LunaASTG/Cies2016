<?php
	$db_host = "localhost";
	$db_name = "cristin8_encuentro2016";
	$db_user = "cristin8_enciu16";
	$db_pwd = "[LTTKNB-kUx;";

	mysql_connect($db_host, $db_user, $db_pwd);
	mysql_select_db($db_name);

	$error = false;
	$exito = false;

	if(isset($_POST['registro'])) {
		$data = $_POST;
		echo "<pre>";
//		var_dump($data);
		echo "</pre>";

		if($data['universidad'] == 'otra') {
			$institucion = $data['universidad'];
		} else {
			$institucion = $data['otrauniversidad'];
		}

		$nombre = $data['nombre'];
		$apellidos = $data['apellidos'];
		$correo = $data['correo'];
		$telefono = $data['telefono'];
		$grado = $data['grado'];
		$carrera = $data['carrera'];
		$matricula = $data['matricula'];

		if($data['universidad'] == 'otra')
			$institucion = $data['otrauniversidad'];
		else
			$institucion = $data['universidad'];

		$taller1 = $data['taller1'];
		$taller2 = $data['taller2'];
		$encuentrosanteriores = $data['asistidoanteriormente'];
		$encuentro1 = $data['event1'];
		$encuentro2 = $data['event2'];
		$encuentro3 = $data['event3'];
		$encuentro4 = $data['event4'];
		$encuentro5 = $data['event5'];

		$queteintereso = $data['interesanteanteriores'];
		$conociascies = $data['cies'];
		$integrartecies = $data['integrartecies'];
		if($data['porqueintegrarte'] != '')
			$integrartecies .= ' '.$data['porqueintegrarte'];

		$expectativas = $data['expectativas'];
		$futurosencuentros = $data['futurosencuentros'];

		if($nombre == "") cancel();
		if($apellidos == "") cancel();
		if($correo == "") cancel();
		if($telefono == "") cancel();
		if($grado == "") cancel();
		if($carrera == "") cancel();
		if($matricula == "") cancel();

		$sql = "INSERT INTO registros (id, nombre, apellidos, correo, telefono, grado, carrera, matricula, institucion, taller1, taller2, encuentrosanteriores, encuentro1, encuentro2, encuentro3, encuentro4, encuentro5, queteinterso, conociascies, integrartecies, expectativas, futurosencuentros, fecharegistro) VALUES (NULL, '$nombre', '$apellidos', '$correo', $telefono, '$grado', '$carrera', '$matricula', '$institucion', '$taller1', '$taller2', '$encuentrosanteriores', '$encuentro1', '$encuentro2', '$encuentro3', '$encuentro4', '$encuentro5', '$queteinterso', '$conociascies', '$integrartecies', '$expectativas', '$futurosencuentros', CURRENT_TIMESTAMP);";

		if($error == false) {
			if(mysql_query($sql)) {
				$exito = mysql_insert_id();

				require 'PHPMailer/PHPMailerAutoload.php';

				$mail = new PHPMailer;
				$mail->setFrom('encuentro@ciesjuvenil.org', 'CIES Juvenil');
				$mail->addAddress($correo, $nombre.' '.$apellidos);     // Add a recipient
				$mail->addReplyTo('encuentro@ciesjuvenil.org', 'CIES Juvenil');

				$mail->Subject = 'Tu registro fue exitoso!';
				$mail->Body    = 'Gracias por registrarte, tu número de folio es '.$exito.'. Presenta tu número de folio impreso o en tu celular y tu credencial de estudiante o identificación oficial. Te esperamos a las 7:00 AM en el Teatro Morelos, próximo Miércoles 11 de Mayo. Puedes Descargar el programa en la página de www.ciesjuvenil.org';
				$mail->send();

			} else {
				$error = true;
			}
		}

	}


	function cancel() {
		$error = true;
	}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
		<!-- google fonts -->
		<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

		<!-- Favicon -->
		<link rel="icon" type="image/png" href="img/favicon.png" />

		<!-- bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- style css -->
		<link rel="stylesheet" href="css/style.css"/>

		<!-- responsive css -->
		<link href="css/responsive.css" rel="stylesheet"/>

		<!-- Script -->
		<script src="js/jquery-1.12.3.min.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
  </head>
  <body>
    <header>
      <div class="nav-menu">
          <div class="nav-container">
            <div class="nav-brand">
              <a href="#" class="brand"><img class="brand" src="img/cies.png" alt="cies logo" /></a>
            </div>
            <ul class="nav-bar">
              <li class="nav-item" ><a href="index.html" id="nav-a">Home</a></li>
              <li class="nav-item" ><a href="index.html #show" id="nav-a">Programa</a></li>
              <li class="nav-item" ><a href="registro.php" id="nav-a">Registro</a></li>
              <li class="nav-item" ><a href="index.html #contacto" id="nav-a">Contacto</a></li>
            </ul>
          </div>
  </header>
	<?php
		if($error == true) {
	?>
	<hr/>
	<h2>Hubo uno o más errores en tu registro, por favor completa todos los campos</h2>
	<hr/>
	<?php
		}
	?>

	<?php
		if($exito != false) {
	?>
	<hr/>
	<h2>Te has registrado exitosamente, tu número de folio es <?= $exito ?></h2>
	<hr/>
	<?php
		}
	?>
  <section class="form-section">
    <div class="container">
      <form class="registro" action="registro.php" method="post">
        <h4 class="datos-title">Datos Generales:</h4>
        <h5>Nombre(s): <input type="text" name="nombre"></h5>
        <h5>Apellidos: <input type="text" name="apellidos"></h5>
        <h5>Correo: <input type="text" name="correo"></h5>
        <h5>Teléfono móvil: <input type="text" name="telefono"></h5>
        <h5>Grado: <input type="text" name="grado"></h5>
        <h5>Carrera: <input type="text" name="carrera"></h5>
        <h5>Matrícula de estudiante: <input type="text" name="matricula"></h5>
        <h4 class="universidad-title">Institución:</h4><br>
			<input type="radio" name="universidad" value="umsnh" checked>Universidad Michoacana de San Nicolás de Hidalgo<br>
			<input type="radio" name="universidad" value="uvaq">Universidad Vasco de Quiroga<br>
			<input type="radio" name="universidad" value="itm">Instituto Tecnológico de Morelia<br>
			<input type="radio" name="universidad" value="unla">Universidad Latina de América<br>
			<input type="radio" name="universidad" value="udem">Universidad de Morelia<br>
			<input type="radio" name="universidad" value="utm">Universidad Tecnológica de Morelia<br>
			<input type="radio" name="universidad" value="uid">Universidad Interamericana para el Desarrollo<br>
			<input type="radio" name="universidad" value="unij">Universidad Internacional Jefferson<br>
			<input type="radio" name="universidad" value="itvm">Instituto Tecnológico del Valle de Morelia<br>
			<input type="radio" name="universidad" value="ipn">Instituto Politécnico Nacional, Unidad Morelia<br>
			<input type="radio" name="universidad" value="itsh">Instituto Tecnológico Superior de Huetamo<br>
			<input type="radio" name="universidad" value="tecnm">Tecnológico Nacional de México<br>
			<input type="radio" name="universidad" value="otra">Otra Institución o Universidad: <input type="text" name="otrauniversidad"><br>
        <h3>Selecciona el taller de tu preferencia:</h3>
        <h4 class="taller-title">Taller (Primera Intervención)</h4>
        <input type="radio" name="taller1" value="1" checked>SALA 1. Jimena Pardo, CEO de Carrot . “Compartiendo la innovación ”<br>
        <input type="radio" name="taller1" value="2">SALA 2. Ana Laura Lozano, Escuela de Activistas . “Ecocidio en Michoacán”<br>
        <input type="radio" name="taller1" value="3">SALA 3. Juan del Cerro, Socialab. “Hablemos de Emprendimiento”<br>
        <input type="radio" name="taller1" value="4">SALA 4. Guillermo Asiain, CEO de Level UP. “Workshop liderazgo colaborativo”<br>
        <input type="radio" name="taller1" value="5">SALA 5. Daniel Gómez Íñiguez, CEO Industrias SOLBEN . “El arte de emprender”<br>
        <input type="radio" name="taller1" value="6">SALA 6. Pavel Lau y Karla Reyes, GRUPO Re. “Liderazgo social”<br>
        <input type="radio" name="taller1" value="7">SALA 7. Mayteck Arenas, AIESEC, “Movilidad universitaria<br>
        <input type="radio" name="taller1" value="8">SALA 8. Alejandro Martínez, Microsoft. “Programando tecnología disruptiva”<br>
        <input type="radio" name="taller1" value="9">SALA 9. Ana Karen Ramírez, Epic Queen. “Crear una idea desde cero”<br>
        <h4 class="taller-title">Taller (Segunda Intervención)</h4>
        <input type="radio" name="taller2" value="1" checked>SALA 1. Jimena Pardo, CEO de Carrot . “Compartiendo la innovación ”<br>
        <input type="radio" name="taller2" value="2">SALA 2. Ana Laura Lozano, Escuela de Activistas . “Ecocidio en Michoacán”<br>
        <input type="radio" name="taller2" value="3">SALA 3. Juan del Cerro, Socialab. “Hablemos de Emprendimiento”<br>
        <input type="radio" name="taller2" value="4">SALA 4. Guillermo Asiain, CEO de Level UP. “Workshop liderazgo colaborativo”<br>
        <input type="radio" name="taller2" value="5">SALA 5. Daniel Gómez Íñiguez, CEO Industrias SOLBEN . “El arte de emprender”<br>
        <input type="radio" name="taller2" value="6">SALA 6. Pavel Lau y Karla Reyes, GRUPO Re. “Liderazgo social”<br>
        <input type="radio" name="taller2" value="7">SALA 7. Mayteck Arenas, AIESEC, “Movilidad universitaria<br>
        <input type="radio" name="taller2" value="8">SALA 8. Alejandro Martínez, Microsoft. “Programando tecnología disruptiva”<br>
        <input type="radio" name="taller2" value="9">SALA 9. Ana Karen Ramírez, Epic Queen. “Crear una idea desde cero”<br>
        <h4 class="ask1">¿Has asistido a los Encuentros Interuniversitarios anteriormente?</h4>
			<input type="radio" name="asistidoanteriormente" value="Si">Sí<br>
			<input type="radio" name="asistidoanteriormente" value="No">No<br>
        <h4 class="ask2">¿A cuáles?</h4>
			<input type="checkbox" name="event1" value="1er">1er Encuentro Interuniversitario “Del Miedo a la Esperanza”<br>
			<input type="checkbox" name="event2" value="2do">2do Encuentro Interuniversitario “De la Esperanza al Compromiso"<br>
			<input type="checkbox" name="event3" value="3er">3er. Encuentro Interuniversitario “Del Compromiso a la Acción”<br>
			<input type="checkbox" name="event4" value="4to">4° Encuentro Interuniversitario “De la Acción al Cambio”<br>
			<input type="checkbox" name="event5" value="5to">5° Encuentro Interuniversitario “Generación sin Miedo, Cambiando Michoacán”<br>
        <h4 class="ask3">¿Qué te interesó de los encuentros anteriores?</h4>
        <input type="text" name="interesanteanteriores" value="i1">
        <h4 class="ask4">¿Conocías CIES Juvenil?</h4>
        <input type="text" name="cies" value="">
        <h4 class="ask5">¿Te gustaría integrarte a CIES Juvenil? ¿Por qué?</h4>
			<input type="radio" name="integrartecies" value="Si" checked>Si<br>
			<input type="radio" name="integrartecies" value="No">No<br>
			<input type="text" name="porqueintegrarte">
        <h4 class="ask6">¿Qué expectativas tienes del 6° encuentro Interuniversitario?</h4>
			<input type="text" name="expectativas" >
        <h4 class="ask7">¿Que temática te gustaría proponer para futuros eventos?</h4>
			<input type="text" name="temaproximoseventos">
		<input type="hidden" name="registro" value="1">
		<input type="submit" value="Registrar">
      </form>
      <!--ATENCIÓN
      Datos Generados en Automático:
      Fecha de Registro y Hora
      FOLIO DE REGISTRO-->
    </div>
  </section>
</body>
</html>
