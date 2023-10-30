<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estylos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>¿Qué hacemos?</title>
    
</head>
<body>
    <?php 
        session_start();
        if (empty($_SESSION["usuario"])) {
            include 'header2.php';
        }else{
            include 'header3.php';
        }
    ?>
    <div class="container3">
        <div class="row3">
            <div class="col3">
                <h1 id="ttl">Transformamos Ideas en Soluciones Digitales</h1>
                <p id="txt">En nuestra empresa de desarrollo de software, nos apasiona convertir ideas innovadoras en soluciones digitales funcionales y eficaces. Con un equipo de expertos en programación y diseño, trabajamos incansablemente para dar vida a tus conceptos y proyectos. Desde aplicaciones móviles a sistemas empresariales, 
                    nuestra misión es impulsar la innovación y ofrecer soluciones a medida que cumplen y superan tus expectativas. Con nosotros, puedes contar con tecnología de vanguardia, calidad excepcional y un enfoque centrado en tus necesidades. ¡Permítenos ser tu socio en el camino hacia el éxito digital!</p>
                <button class="btn3" type="button">Ver mas</button>
                </div>
            <div class="col3 cards">
                
                <div class="card3 card1">
                    <div class="overlay">
                        <h5 id="ttl5">Innovación Continua</h5>
                        <p id="txt5"> Buscar constantemente nuevas formas de resolver problemas y adoptar tecnologías avanzadas.</p>
                    </div>
                </div>
                <div class="card3 card2">
                    <div class="overlay">
                        <h5 id="ttl5">Calidad del Software</h5>
                        <p id="txt5"> Desarrollar software confiable, eficiente y sin errores.</p>
                    </div>
                </div>
                <div class="card3 card4">
                    <div class="overlay">
                        <h5 id="ttl5">Atención al Cliente</h5>
                        <p id="txt5">Poner al cliente en el centro, comunicarse efectivamente y satisfacer sus necesidades.</p>
                    </div>
                </div>
                <div class="card3 card5">
                    <div class="overlay">
                        <h5 id="ttl5">Integridad y Ética</h5>
                        <p id="txt5"> Actuar de manera ética, proteger la privacidad y cumplir con las leyes y regulaciones.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <section class="project">
    <h3 class="text-center" style="font-weight: bold; letter-spacing: 2px; font-size: 35px;">
        Proyectos Destacados
        <u><i class="fas fa-star"></i></u>
    </h3>

        <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="image-overlay-3">
                    <img src="../img/inovacion.png" class="img-fluid" alt="Imagen 3">
                    <div class="overlay-3">
                        <h3>ConstrucPro</h3>
                        <p>"ConstrucPro" es una plataforma de software diseñada para la gestión de proyectos de construcción. 
                            Ayuda a las empresas de construcción a planificar, programar, asignar recursos y realizar un seguimiento detallado de sus proyectos, desde la fase de diseño hasta la finalización de la construcción.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container ml-md-auto">
        <div class="row">
            <div class="col-md-6">
                <div class="image-overlay-2">
                    <img src="../img/inovacion.png" class="img-fluid" alt="Imagen 3">
                    <div class="overlay-2">
                        <h3>NoteMaster</h3>
                        <p>"NoteMaster" es una aplicación de software que ayuda a los usuarios a organizar sus notas, listas de tareas y recordatorios. 
                            Los usuarios pueden crear, editar y organizar sus notas de manera eficaz, sincronizándolas en múltiples dispositivos para acceder a ellas en cualquier momento.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Imagen a la izquierda, texto a la derecha -->
                <div class="image-overlay-3">
                    <img src="../img/inovacion.png" class="img-fluid" alt="Imagen 3">
                    
                    <div class="overlay-3">
                       
                        <h3>BookMaster</h3>
                        <p>"LibroMaster" es una solución avanzada de software diseñada para simplificar la gestión de bibliotecas de todo tipo. 
                            Este sistema de gestión de biblioteca permite a bibliotecarios y administradores llevar un control completo de la colección de libros, los usuarios y los préstamos. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-6"></div>
        </div>
    </div>
    </section>
    <?php
        include "footer.html";    
    ?>
</body>
</html>