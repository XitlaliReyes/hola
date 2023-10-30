<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estylos.css">
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
                    <h5 id="ttl5">Innovación Continua</h5>
                    <p id="txt5"> Buscar constantemente nuevas formas de resolver problemas y adoptar tecnologías avanzadas.</p>
                </div>
                <div class="card3 card2">
                    <h5 id="ttl5">Calidad del Software</h5>
                    <p id="txt5"> Desarrollar software confiable, eficiente y sin errores.</p>
                </div>
                <div class="card3 card4">
                    <h5 id="ttl5">Atención al Cliente</h5>
                    <p id="txt5">Poner al cliente en el centro, comunicarse efectivamente y satisfacer sus necesidades.</p>
                </div>
                <div class="card3 card5">
                    <h5 id="ttl5">Integridad y Ética</h5>
                    <p id="txt5"> Actuar de manera ética, proteger la privacidad y cumplir con las leyes y regulaciones.</p>
                </div>

            </div>
        </div>
    </div>
    <?php
        include "footer.html";    
    ?>
</body>
</html>