<body>
<?php
ob_start(); //por si no funciona el header location (activa almacenamiento en buffer de salida)
$config['base_url'] = 'http://' . $_SERVER["SERVER_NAME"]; //nombre del servidor(dominio) en el que estas actualmente
require 'header2.php';

?>

<div style="margin:100px;">

<?php

# Iniciar sesión para usar $_SESSION
session_start();

if (empty($_SESSION["usuario"])) {
    header("../../index.php");
    exit();
}
// le indicamos al usuario un boton para salir
echo '<button onclick="window.location.href = \'logout.php\'">Cerrar sesión</button>';
echo "<br><br><h1>Bienvenido(a) " . $_SESSION["usuario"] . "</h1>";
?>
<p>
    Soy una pagina que solo pueden ver los usuarios logueados
</p>
<pre>
                            Codecrafters: Donde la Innovación y la Creatividad se Unen

Nuestra Cultura: En Codecrafters, valoramos la innovación, la creatividad y la excelencia en el desarrollo de software. Nuestra cultura fomenta un ambiente de trabajo colaborativo y de aprendizaje continuo. Algunos aspectos destacados de nuestra cultura incluyen:

Colaboración: Fomentamos la colaboración entre equipos y departamentos. Creemos que las mejores ideas surgen cuando trabajamos juntos.

Crecimiento Profesional: Ofrecemos oportunidades de aprendizaje y desarrollo continuo. Ya sea a través de capacitaciones, conferencias o proyectos desafiantes, siempre estamos buscando formas de ayudar a nuestros empleados a crecer en sus carreras.

Innovación: Valoramos la creatividad y la innovación. Animamos a nuestros empleados a proponer nuevas ideas y enfoques para los desafíos técnicos.

Diversidad e Inclusión: Creemos en la importancia de la diversidad y la inclusión. Nuestra empresa es un lugar donde personas de diferentes orígenes y experiencias se sienten valoradas y respetadas.

Equilibrio entre Trabajo y Vida: Reconocemos la importancia de un equilibrio saludable entre el trabajo y la vida personal. Ofrecemos flexibilidad en horarios y opciones de trabajo remoto.

Nuestros Beneficios:

En Codecrafters, nos enorgullece ofrecer una variedad de beneficios para nuestros empleados. Algunos de los beneficios que disfrutarás como parte de nuestro equipo incluyen:

- Seguro de Salud Completo: Ofrecemos un sólido plan de seguro médico y dental para nuestros empleados y sus familias.

- Desarrollo Profesional: Invertimos en tu crecimiento profesional, ofreciendo oportunidades de capacitación y desarrollo continuo.

- Horario Flexible: Entendemos la importancia del equilibrio entre trabajo y vida personal. Ofrecemos horarios flexibles y opciones de trabajo remoto.

- Ambiente de Trabajo Creativo: Nuestra oficina es un lugar inspirador, diseñado para fomentar la creatividad y la colaboración.

- Días de Vacaciones Generosos: Ofrecemos una generosa cantidad de días de vacaciones pagadas para que puedas recargar energías y disfrutar de tu tiempo libre.

- Participación en Proyectos Emocionantes: Trabajarás en proyectos innovadores y emocionantes que desafiarán tus habilidades y te permitirán crecer como profesional.

- Reconocimiento y Recompensas: Reconocemos y recompensamos el arduo trabajo y el desempeño excepcional de nuestros empleados.

En Codecrafters, te unirás a un equipo apasionado de profesionales de desarrollo de software que comparten una visión común: impulsar la innovación a través de la tecnología. ¡Esperamos verte crecer y prosperar en Codecrafters mientras contribuyes a nuestra misión de transformar ideas en soluciones tecnológicas excepcionales!
</pre>

<details>
    <summary>Se parte de nuestro equipo</summary>
    <h3>Llena el siguiente formulario</h3>
    <form class="needs-validation" novalidate method="post" action="validar_perfil.php" enctype="multipart/form-data">
    <div class="form-row">
        <div class="form-group col-md-4">
        <label for="Nombre">Nombre</label>
        <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre" required>
        </div>
        <div class="form-group col-md-4">
        <label for="ApellidoP">Apellido Paterno</label>
        <input name="apellidoP" type="text" class="form-control" id="apellidop" placeholder="Apellido Paterno" required>
        </div>
        <div class="form-group col-md-4">
        <label for="ApellidoM">Apellido Materno</label>
        <input name="apellidoM" type="text" class="form-control" id="apellidom" placeholder="Apellido Materno" required>
        </div>
    </div>
    <div class="form-group">
        <label for="inputel">Teléfono</label>
        <input name="telefono" type="text" class="form-control" id="telefono" placeholder="4491234567" required>
    </div>

    <!-- Subir foto -->

    <div class="custom-file col-md-4">
        <label for="file">Subir tu foto</label>    
        <input type="file" name="file" id="file" class="form-control-file" accept=".jpg, .png, .gif, .bmp" required>
    </div>

    <!-- Fecha de Nacimiento -->
    <br><br><br><p>Fecha de Nacimiento</p>
    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="inputDay">Dia</label>
            <select id="inputDay" name="dia" class="form-control" required>
                <option selected>Choose...</option>
                <?php
                    // Generar opciones para los días (del 1 al 31)
                    for ($dia = 1; $dia <= 31; $dia++) {
                        echo "<option value='$dia'>$dia</option>";
                    }
                ?>
            </select>
        </div>
        <div class="form-group col-md-2">
            <label for="inputMonth">Mes</label>
            <select id="inputMonth" name="mes" class="form-control" required>
                <option selected>Choose...</option>
                <option value="1">Enero</option>
                <option value="2">Febrero</option>
                <option value="3">Marzo</option>
                <option value="4">Abril</option>
                <option value="5">Mayo</option>
                <option value="6">Junio</option>
                <option value="7">Julio</option>
                <option value="8">Agosto</option>
                <option value="9">Septiembre</option>
                <option value="10">Octubre</option>
                <option value="11">Noviembre</option>
                <option value="12">Diciembre</option>
            </select>
        </div>
        <div class="form-group col-md-2">
            <label for="inputYear">Año</label>
            <select id="inputYear" name="año" class="form-control" required>
                <option selected>Choose...</option>
                <?php
                    // Calcular el año actual y generar opciones para años
                    $currentYear = date("Y");
                    $minYear = $currentYear - 60; // Máximo 60 años
                    $maxYear = $currentYear - 18; // Mínimo 18 años
                    for ($year = $maxYear; $year >= $minYear; $year--) {
                        echo "<option value='$year'>$year</option>";
                    }
                ?>
            </select>
        </div>
    </div>

    <!-- Checkbox -->
    <div class="form-group">
        <br><p>Lenguajes de Progrmación que domina</p>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="lenguajes[]" value="C">
            <label class="form-check-label" for="inlineCheckbox1">C</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="lenguajes[]" value="C++">
            <label class="form-check-label" for="inlineCheckbox2">C++</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" name="lenguajes[]" value="C#">
            <label class="form-check-label" for="inlineCheckbox3">C#</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" name="lenguajes[]" value="Python">
            <label class="form-check-label" for="inlineCheckbox4">Python</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox5" name="lenguajes[]" value="Java">
            <label class="form-check-label" for="inlineCheckbox5">Java</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox6" name="lenguajes[]" value="Javascript">
            <label class="form-check-label" for="inlineCheckbox6">Javascript</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox7" name="lenguajes[]" value="Php">
            <label class="form-check-label" for="inlineCheckbox7">Php</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox8" name="lenguajes[]" value="Perl">
            <label class="form-check-label" for="inlineCheckbox8">Perl</label>
        </div>
    </div>

    <!-- RadioB -->
    <br><p>Disponibilidad para viajar</p>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="disponibilidad_viajar" id="inlineRadio1" value="si">
        <label class="form-check-label" for="inlineRadio1">Si</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="disponibilidad_viajar" id="inlineRadio2" value="no">
        <label class="form-check-label" for="inlineRadio2">No</label>
    </div>

    <!-- RadioB2 -->
    <br><br><p>Disponibilidad para cambio de residencia</p>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="disponibilidad_residencia" id="inlineRadio1" value="si">
        <label class="form-check-label" for="inlineRadio1">Si</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="disponibilidad_residencia" id="inlineRadio2" value="no">
        <label class="form-check-label" for="inlineRadio2">No</label>
    </div>

    <!-- RadioB3 -->
    <br><br><p>Ingles</p>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="ingles" id="inlineRadio1" value="si">
        <label class="form-check-label" for="inlineRadio1">Si</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="ingles" id="inlineRadio2" value="no">
        <label class="form-check-label" for="inlineRadio2">No</label>
    </div>

    <!-- Select puesto al que aplica -->
    <div class="form-row">
    <div class="form-group col-md-4">
        <br>
        <label for="inputPuesto">Puesto</label>
        <select id="inputPuesto" name="puesto" class="form-control" required>
            <option selected>Choose...</option>
            <option value="Desarrollador Front-End">Desarrollador Front-End</option>
            <option value="Desarrollador Back-End">Desarrollador Back-End</option>
            <option value="Arquitecto de Software">Arquitecto de Software</option>
            <option value="Ingeniero de DevOps">Ingeniero de DevOps</option>
            <option value="Especialista en Inteligencia Artificial">Especialista en Inteligencia Artificial</option>
            <option value="Ingeniero de Automatización de Pruebas">Ingeniero de Automatización de Pruebas</option>
            <option value="Diseñador de Experiencia de Usuario (UX Designer)">Diseñador de Experiencia de Usuario (UX Designer)</option>
            <option value="Especialista en Blockchain">Especialista en Blockchain</option>
        </select>
    </div>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</details>

</body>