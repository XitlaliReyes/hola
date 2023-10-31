<?php
    session_start();
    if (empty($_SESSION["usuario"])) {
        include 'header2.php';
    }else{
        include 'header3.php';
    }
?>


<header>
    <style>
        form{
            margin:200px;
        }
    </style>
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon_io/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon_io/favicon-16x16.png">
</header>

<body>
<form novalidate method="post" action="examen_validacion.php">
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Código:</label>
    <div class="col-sm-10">
      <input name="codigo" type="text" class="form-control" id="inputPassword" placeholder="Codigo">
    </div>
  </div>
  <button type="submit" class="btn btn-primary mb-2">Hacer Examen</button>
</form>
</body>
<?php
    require 'footer.html'
?>