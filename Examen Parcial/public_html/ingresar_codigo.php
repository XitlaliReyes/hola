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