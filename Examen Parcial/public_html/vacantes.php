<?php
    session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estylos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Vacantes</title>
    
</head>
<body>
<?php
ob_start(); //por si no funciona el header location (activa almacenamiento en buffer de salida)
$config['base_url'] = 'http://' . $_SERVER["SERVER_NAME"]; //nombre del servidor(dominio) en el que estas actualmente
include 'header3.php';

?>
<?php

# Iniciar sesión para usar $_SESSION

if (empty($_SESSION["usuario"])) {
    header("index.php");
    exit();
}

?>

<section class="carrusel-V">
    <div class="principal text-center">
        <div class="row">
            <div class="col-md-7 col-sm-12">
                <br><br>
                <?php echo "<br><br><h1>Bienvenido(a) " . $_SESSION["usuario"] . "</h1>"; ?>
                <p>Únete a Nuestra Aventura en CodeCrafters!</p>
                <button class="btn btn-light px-5 py-2">Revisar Vacantes</button>
            </div>
            <div class="col-md-5 col-sm-12">
                <img src="img/software.png" alt="hola" class="img-fluid">
            </div>
        </div>
    </div>
</section>


<main class="contenedorV">
    <section class="seccion-V">
        <div class="container-V text-center">
            <div class="row">
                <div class="col-md-6" id="elemento1">
                    <img src="img/vacante1.jpg" alt="">
                </div>
                <div class="col-md-6" id="elemento2">
                    <div class="div panel text-left">
                        <h1>Codecrafters: Donde la Innovación y la Creatividad se Unen</h1>
                        <p class="pt-4">En Codecrafters, nos enorgullece ofrecer una variedad de beneficios para nuestros empleados. Algunos de los beneficios que disfrutarás como parte de nuestro equipo incluyen:
                            <ul>
                                <li>Seguro de Salud Completo: Ofrecemos un sólido plan de seguro médico y dental para nuestros empleados y sus familias.</li>
                                <li>Desarrollo Profesional: Invertimos en tu crecimiento profesional, ofreciendo oportunidades de capacitación y desarrollo continuo.</li>
                                <li>Horario Flexible: Entendemos la importancia del equilibrio entre trabajo y vida personal. Ofrecemos horarios flexibles y opciones de trabajo remoto.</li>
                            </ul>
                        </p>
                        <p> En Codecrafters, valoramos la innovación, la creatividad y la excelencia en el desarrollo de software. Nuestra cultura fomenta un ambiente de trabajo colaborativo y de aprendizaje continuo. 
                            En Codecrafters, te unirás a un equipo apasionado de profesionales de desarrollo de software que comparten una visión común: impulsar la innovación a través de la tecnología. ¡Esperamos verte crecer y prosperar en Codecrafters mientras contribuyes a nuestra misión de transformar ideas en soluciones tecnológicas excepcionales!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-2 container-fluid p-0">
        <div class="cover">
            <div class="contenido text-center">
                <h1>Conoce Nuestras Vacantes</h1>
                <p>
                Si compartes nuestra pasión por la tecnología y estás listo para hacer una diferencia, ¡queremos conocerte!
                </p>
            </div>
        </div>
        <div class="container-fluid text-center">
    <div class="vacantes row">
        <div class="col-md-6 col-lg-4">
            <div class="rect">
                <h5>Desarrollador Back-End</h5>
                <img src="img/back-end.png" alt="imagen1" class="img-fluid">
                <a href="#enlace-vacante-1" class="btn btn-primary">Aplicar</a>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="rect">
                <h5>Arquitecto de Software</h5>
                <img src="img/desarrollador.png" alt="imagen2" class="img-fluid">
                <a href="#enlace-vacante-2" class="btn btn-primary">Aplicar</a>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="rect">
                <h5>Especialista en Inteligencia Artificial</h5>
                <img src="img/IA.png" alt="imagen3" class="img-fluid">
                <a href="#enlace-vacante-3" class="btn btn-primary">Aplicar</a>
            </div>
        </div>
        
    </div>
</div>

<!-- Checkbox oculto y contenido de vacantes adicionales -->
        <input type="checkbox" id="mostrarMasCheckbox" class="hidden-checkbox">
        <div class="container text-center vacantes-ocultas">
            <div class="vacantes row">
            <div class="col-md-6 col-lg-4">
                <div class="rect">
                        <h5>Especialista en Blockchain</h5>
                        <img src="img/blockchain.png" alt="imagen4" class="img-fluid">
                        <a href="#enlace-vacante-4" class="btn btn-primary">Aplicar</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="rect">
                        <h5>Desarrollador Front-End</h5>
                        <img src="img/front-end.png" alt="imagen5" class="img-fluid">
                        <a href="#enlace-vacante-5" class="btn btn-primary">Aplicar</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="rect">
                        <h5>Ingeniero de devOps</h5>
                        <img src="img/software.png" alt="imagen6" class="img-fluid">
                        <a href="#enlace-vacante-6" class="btn btn-primary">Aplicar</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="rect">
                        <h5>Automatización de Pruebas</h5>
                        <img src="img/pruebas.png" alt="imagen6" class="img-fluid">
                        <a href="#enlace-vacante-6" class="btn btn-primary">Aplicar</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="rect">
                        <h5>UX Designer</h5>
                        <img src="img/designer.png" alt="imagen6" class="img-fluid">
                        <a href="#enlace-vacante-6" class="btn btn-primary">Aplicar</a>
                    </div>
                </div>
            </div>
        </div>

        <label for="mostrarMasCheckbox" class="rect flecha">
            <img src="flecha.png" alt="Mostrar Más">
        </label>

</section>

    <section>
        
    </section>

</main>
<!-- <details>
    <summary>Se parte de nuestro equipo</summary>
    <h3>Llena el siguiente formulario</h3>
    <form class="needs-validation" novalidate method="post" action="vistas/Login_form/validar_perfil.php" enctype="multipart/form-data">
    <div class="form-row">
        <div class="form-group col-md-4">
        <label for="Nombre">Nombre</label>
        <input name="name" type="text" class="form-control" id="nombre" placeholder="Nombre" required>
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
        <input name="telephone" type="text" class="form-control" id="telefono" placeholder="4491234567" required>
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
</details> -->
</body>
<?php
    include "footer.html";    
?>