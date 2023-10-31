<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
	<link rel="stylesheet" href="css/estylos.css">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon_io/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon_io/favicon-16x16.png">
	<title>Contactanos</title>
</head>


<body class="conta">
        <main class="enca">
        <?php
            if (empty($_SESSION["usuario"])) {
                include 'header2.php';
            }else{
                include 'header3.php';
            }
        ?>
        </main>
        <br>
        <div class="contenedor">
		<div class="formulariou">
			<h3 class="sos">¿En que podemos ayudarte?</h3>
            <p>Llena nuestro formulario para que uno de nuestros especialistas 
                se ponga en contacto contigo y podamos agendar tu consultoría gratuita
            </p>
            <form method="post" action="correo.php">
                <fieldset class="formu">
                    <input type="text" placeholder="Nombre" id="nombre" name="username" required><br>
                    <input type="email" placeholder="Correo" id="correo" name="correo" required><br>
                    <input type="tel" placeholder="Telefono" name="telefono" id="telefono" required><br>
                    <textarea placeholder="Mensaje" id="msj" name="msj"></textarea><br>
                    <input type="submit" value="Enviar" class="boton">
                </fieldset>
            </form>
    </div>
		<div class="cont2">
            <p><i class="fas fa-map-marked fa-lg" style="color: #00fbff;"></i></p>
            <p>Ubicacion:<br>Avenida Universidad 940, Bosques del Prado Sur, 20100 Aguascalientes, Ags.
            </p>
		</div>
		<div class="cont3">
            <p><i class="fas fa-envelope-open fa-lg" style="color: #00d5ff;"></i></p>
			<p>Nuestro correo<br><span style="color: aqua;">Vexcode@gmail.com</span></p>
		</div>
		<div class="cont4">
            <p><i class="fas fa-phone fa-lg" style="color: #00ffee;"></i></p>
            <p>Telefono de contacto<br><span style="color: aqua;">+777 - 333 893 8273</span>
            </p>
        </div>
        <div class="inte">
            <p><img src="../public_html/img/Chris.jpg" width="100" height="100" alt="holis"><br>Christopher Martinez Gonzalez <br>Redes sociales <br><a href=""><i class="fab fa-instagram fa-1x" style="color: #CE95D8;"></i></a>Instagram<br><i class="fa-brands fa-twitter fa-1x" style="color: #CE95D8;"></i>Twitter</p>
            <p><img src="../public_html/img/vale.jpeg" width="100" height="100" alt="holis 2"><br>Valeria Nuñez de Lira <br>Redes sociales <br><a href="https://www.instagram.com/halval_q/"><i class="fab fa-instagram fa-1x" style="color: #CE95D8;"></i></a>Instagrambr <br><i class="fa-brands fa-twitter fa-1x" style="color: #CE95D8;"></i>Twitter</p>
            <p><img src="../public_html/img/img_xsrr.jpg" width="100" height="100" alt="holis 3"> <br>Xitlali Sarahi Reyes Reyes <br>Redes sociales <br><a href="https://www.instagram.com/xitlalireyes70/"><i class="fab fa-instagram fa-1x" style="color: #CE95D8;"></i></a>Instagram<br><i class="fa-brands fa-twitter fa-1x" style="color: #CE95D8;"></i>Twitter</p>
        </div>
        <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3701.6065951680607!2d-102.31435082546328!3d21.911219956887034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429eee2cf15dd8d%3A0x8d9aee56554924bd!2sAvenida%20Universidad%20940%2C%20Bosques%20del%20Prado%20Sur%2C%2020100%20Aguascalientes%2C%20Ags.!5e0!3m2!1ses-419!2smx!4v1698596815907!5m2!1ses-419!2smx" width=100% height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
	</div>
    <footer class="pdp">
            <?php
            include "footer.html";    
            ?>
        </footer>
</body>
 