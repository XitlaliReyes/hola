<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
	<link rel="stylesheet" href="css/estylos.css">
	<title>Contactanos</title>
</head>


<body class="conta">
        <main class="enca">
        <?php 
            session_start();
            if (empty($_SESSION["usuario"])) {
                include 'header2.php';
            }else{
                include 'header3.php';
            }
        ?>
            <p></p>
        </main>
        <br>
        <div class="contenedor">
		<div class="formulariou">
			<h3>¿En que podemos ayudarte?</h3>
            <p>Llena nuestro formulario para que uno de nuestros especialistas 
                se ponga en contacto contigo y podamos agendar tu consultoría gratuita
            </p>
            <form method="post" action="">
                <fieldset class="formu">
                    <input type="text" placeholder="Nombre" id="nombre" name="username" required><br>
                    <input type="email" placeholder="Correo" id="correo" name="correoe" required><br>
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
			<p>Nuestro correo<br><span style="color: aqua;">hola@maindsoft.net</span></p>
		</div>
		<div class="cont4">
            <p><i class="fas fa-phone fa-lg" style="color: #00ffee;"></i></p>
            <p>Telefono de contacto<br><span style="color: aqua;">+777 - 333 893 8273</span>
            </p>
        </div>
        <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3701.6065951680607!2d-102.31435082546328!3d21.911219956887034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429eee2cf15dd8d%3A0x8d9aee56554924bd!2sAvenida%20Universidad%20940%2C%20Bosques%20del%20Prado%20Sur%2C%2020100%20Aguascalientes%2C%20Ags.!5e0!3m2!1ses-419!2smx!4v1698596815907!5m2!1ses-419!2smx" width=100% height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
	</div>
    <footer class="pdp">
            <?php
            include "footer.html";    
            ?>
            <p></p>
        </footer>
</body>
