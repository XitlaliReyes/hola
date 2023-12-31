<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: rgba(0, 0, 0, 0.7);" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img src="img/favicon.png" alt="logo" class="w-25"></a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
            &#9776;
        </button>
        <div class="collapse navbar-collapse" id="exCollapsingNavbar">
            <ul class="nav navbar-nav">
                <li class="nav-item"><a href="index.php" class="nav-link text-white">Inicio</a></li>
                <li class="nav-item"><a href="nosotros.php" class="nav-link text-white">¿Qué hacemos?</a></li>
                <li class="nav-item"><a href="contactanos.php" class="nav-link text-white">Contacto</a></li>
                <li class="nav-item"><a href="vacantes.php" class="nav-link text-white">Vacantes</a></li>
            </ul>
            <!-- Example split danger button -->
            <div class="btn-group ml-auto">
            <button type="button" class="btn">
                <?php 
                $usuario = $_SESSION["usuario"];
                echo '<p style="color:white;margin-bottom:0px;">' . $usuario . '</p>';
                ?>
            </button>
            <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Cerrar Sesión</span>
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="vistas/Login_form/logout.php">Cerrar Sesión</a>
            </div>
            </div>
        </div>
    </div>
</nav>
 

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  