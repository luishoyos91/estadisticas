<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Estadios</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
         integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <link rel="stylesheet" href="css/estilos.css">
      <script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"></script>
   </head>
   <body>
   <?php
    include_once("php/conexion.php");
    include("php/registro.php");    
   ?>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
         <img src="iconos/millonarios.png" width="40" height="40" alt="" loading="lazy">
      </a>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="estadios.php">Estadios</a>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
         <br>
         <div class="container">
            <article>
               <h1>Registrar Estadio</h1>
               <form method="POST" action="crear_estadio.php">                  
                  <div class="form-group col-md-6" id="formularios">
                     <label class="control-label" for="nombre">Nombre</label>
                     <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp"
                        name="nombre_estadio" minlenght="3" required>
                  </div>
                  <div class="form-group col-md-6" id="formularios">
                     <label for="aforo">Aforo</label>
                     <input type="number" class="form-control" id="aforo" name="aforo">
                  </div>
                  <div class="form-group col-md-6" id="formularios">
                     <label class="label_form">País</label>
                     <select class="form-control" id="lista_paises" name="pais_estadio">
                     </select>
                  </div>
                  <div class="form-group col-md-6" id="formularios">
                     <label class="label_form">Ciudad</label>
                     <select class="form-control" id="ciudades" name="ciudad_estadio" required>
                     </select>
                  </div>
                  <div class="form-group col-md-6" id="botones_formularios">
                     <input type="submit" class="btn btn-primary" title="Guardar" name="guardar_estadio" value="Guardar"
                     id="boton_guardar"></button>
                     <input type="button" class="btn btn-secondary" title="Cancelar" value="Cancelar" onclick="history.back();">
                  </div>
                     <br>
               </form>
            </article>
         </div>
      </section>
      <footer>
         <hr width="95%" color="#343a40">
         <div class="iconosredes" id="redessociales">
            <div class="ajusteicono">
               <a target="_blank" href="https://www.facebook.com/luishoyos91"><img src="iconos/facebook.svg"
                  alt="facebook" title="Facebook" width="30px" height="30px"></a>
            </div>
            <div class="ajusteicono">
               <a target="_blank" href="https://twitter.com/luishoyos91"><img src="iconos/twitter.svg" alt="twitter"
                  title="Twitter" width="30px" height="30px"></a>
            </div>
            <div class="ajusteicono">
               <a target="_blank" href="https://www.instagram.com/luishoyos91"><img src="iconos/instagram.svg"
                  alt="instagram" title="Instagram" width="30px" height="30px"></a>
            </div>
         </div>
         <div class="textofooter">
            <p class="parrafo_footer">© COPYRIGHT 2020 Bogotá D.C.
               <br>
               Creado por <strong> Ing. Luis Hoyos para Millonarios FC</strong>
            </p>
         </div>
      </footer>
      <script type="text/javascript" src="js/script.js"></script>
   </body>
</html>