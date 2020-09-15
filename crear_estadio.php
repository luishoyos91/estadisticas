<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadios</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <?php
    include("registro.php");
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="estadios.php">Estadios</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
<section>
    <article>
        <div class="container">
            <h1>Registrar Estadio</h1>  
            <form method="POST" action="crear_estadio.php">
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nombre_estadio" required>                    
                </div>
                <div class="form-group col-md-3">
                    <label for="exampleInputPassword1">Ciudad</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="ciudad_estadio" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="exampleInputPassword1">País</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="pais_estadio" required>
                </div>
                <input type="submit" class="btn btn-primary" name="guardar_estadio" value="Guardar" id="boton_guardar"></button>
            </form>
        </div>
    </article>    
</section>
</body>
</html>