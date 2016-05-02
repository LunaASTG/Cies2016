<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro CIES 2016</title>
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- responsive css -->
    <link href="css/responsive.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="nav-menu">
          <div class="nav-container">
            <div class="nav-brand">
              <a href="#" class="brand"><img class="brand" src="img/cies.png" alt="cies logo" /></a>
            </div>
            <ul class="nav-bar">
              <li class="nav-item" ><a href="#" id="nav-a">¿Qué es CIES?</a></li>
              <li class="nav-item" ><a href="#" id="nav-a">Programa</a></li>
              <li class="nav-item" ><a href="registro.php" id="nav-a">Registro</a></li>
              <li class="nav-item" ><a href="#" id="nav-a">Contacto</a></li>
            </ul>
          </div>
  </header>
  <section class="form-section">
    <div class="container">
      <form class="form1" action="index.html" method="post">
        <h4 class="datos-title">Datos Generales:</h4>
        <h5>Nombre(s): <input type="text" name="nombre"></h5>
        <h5>Apellidos: <input type="text" name="apellido"></h5>
        <h5>Correo: <input type="text" name="correo"></h5>
        <h5>Teléfono móvil: <input type="text" name="telefono"></h5>
        <h5>Grado: <input type="text" name="grado"></h5>
        <h5>Carrera: <input type="text" name="carrera"></h5>
        <h5>Matrícula de estudiante: <input type="text" name="matrícula"></h5>
        <h4 class="universidad-title">Institución:</h4><br>
        <input type="radio" name="universidad" value="umsnh">Universidad Michoacana de San Nicolás de Hidalgo<br>
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
        <input type="radio" name="universidad" value="otra">Otra Institución o Universidad: <input type="text" name="universidad"><br>
        <h3>Selecciona el taller de tu preferencia:</h3>
        <h4 class="taller-title">Taller (Primera Intervención)</h4>
        <input type="radio" name="taller" value="taller1">SALA 1. Jimena Pardo, CEO de Carrot . “Compartiendo la innovación ”<br>
        <input type="radio" name="taller" value="taller2">SALA 2. Ana Laura Lozano, Escuela de Activistas . “Ecocidio en Michoacán”<br>
        <input type="radio" name="taller" value="taller3">SALA 3. Juan del Cerro, Socialab. “Hablemos de Emprendimiento”<br>
        <input type="radio" name="taller" value="taller4">SALA 4. Guillermo Asiain, CEO de Level UP. “Workshop liderazgo colaborativo”<br>
        <input type="radio" name="taller" value="taller5">SALA 5. Luis Fernando Lina, Helidroid . “Generación de mapas aéreos con drones”<br>
        <input type="radio" name="taller" value="taller6">SALA 6. Pavel Lau y Karla Reyes, GRUPO Re. “Liderazgo social”<br>
        <input type="radio" name="taller" value="taller7">SALA 7. Mayteck Arenas, AIESEC, “Movilidad universitaria<br>
        <input type="radio" name="taller" value="taller8">SALA 8. Alejandro Martínez, Microsoft. “Programando tecnología disruptiva”<br>
        <input type="radio" name="taller" value="taller9">SALA 9. Ana Karen Ramírez, Epic Queen. “Crear una idea desde cero”<br>
        <h4 class="taller-title">Taller (Segunda Intervención)</h4>
        <input type="radio" name="taller" value="taller10">SALA 1. Jimena Pardo, CEO de Carrot . “Compartiendo la innovación ”<br>
        <input type="radio" name="taller" value="taller11">SALA 2. Ana Laura Lozano, Escuela de Activistas . “Ecocidio en Michoacán”<br>
        <input type="radio" name="taller" value="taller12">SALA 3. Juan del Cerro, Socialab. “Hablemos de Emprendimiento”<br>
        <input type="radio" name="taller" value="taller13">SALA 4. Guillermo Asiain, CEO de Level UP. “Workshop liderazgo colaborativo”<br>
        <input type="radio" name="taller" value="taller14">SALA 5. Luis Fernando Lina, Helidroid . “Generación de mapas aéreos con drones”<br>
        <input type="radio" name="taller" value="taller15">SALA 6. Pavel Lau y Karla Reyes, GRUPO Re. “Liderazgo social”<br>
        <input type="radio" name="taller" value="taller16">SALA 7. Mayteck Arenas, AIESEC, “Movilidad universitaria<br>
        <input type="radio" name="taller" value="taller17">SALA 8. Alejandro Martínez, Microsoft. “Programando tecnología disruptiva”<br>
        <input type="radio" name="taller" value="taller18">SALA 9. Ana Karen Ramírez, Epic Queen. “Crear una idea desde cero”<br>
        <h4 class="ask1">¿Has asistido a los Encuentros Interuniversitarios anteriormente?</h4>
        <input type="radio" name="asist" value="r1">Sí<br>
        <input type="radio" name="asist" value="r2">No<br>
        <h4 class="ask2">¿A cuáles?</h4>
        <input type="radio" name="event" value="e1">1er Encuentro Interuniversitario “Del Miedo a la Esperanza”<br>
        <input type="radio" name="event" value="e2">2do Encuentro Interuniversitario “De la Esperanza al Compromiso"<br>
        <input type="radio" name="event" value="e3">3er. Encuentro Interuniversitario “Del Compromiso a la Acción”<br>
        <input type="radio" name="event" value="e4">4° Encuentro Interuniversitario “De la Acción al Cambio”<br>
        <input type="radio" name="event" value="e5">5° Encuentro Interuniversitario “Generación sin Miedo, Cambiando Michoacán”<br>
        <h4 class="ask3">¿Qué te interesó de los encuentros anteriores?</h4>
        <input type="text" name="interest" value="i1">
        <h4 class="ask4">¿Conocías CIES Juvenil?</h4>
        <input type="text" name="cies" value="ciesr">
        <h4 class="ask5">¿Te gustaría Integrarte a CIES Juvenil? ¿Por qué?</h4>
        <input type="radio" name="like" value="likesi">Si<br>
        <input type="radio" name="like" value="likeno">No<br>
        <input type="text" name="like" value="likecomment">
        <h4 class="ask6">¿Qué expectativas tienes del 6° encuentro Interuniversiario?</h4>
        <input type="text" name="expect" value="expectative">
        <h4 class="ask7">¿Que temática te gustaría proponer para futuros eventos?</h4>
        <input type="text" name="theme" value="theme">
      </form>
      <!--ATENCIÓN
      Datos Generados en Automático:
      Fecha de Registro y Hora
      FOLIO DE REGISTRO-->
    </div>
  </section>
</body>
</html>
