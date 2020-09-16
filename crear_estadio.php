<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Estadios</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
         integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <link rel="stylesheet" href="css/estilos.css">
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <a class="navbar-brand" href="#">Navbar</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                  <div class="form-group col-md-6">
                     <label for="exampleInputEmail1">Nombre</label>
                     <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="nombre_estadio" minlenght="3" required>
                  </div>
                  <div class="form-group col-md-2">
                     <label for="exampleInputEmail1">Aforo</label>
                     <input type="number" class="form-control" id="exampleInputEmail1" name="aforo">
                  </div>
                  <div class="form-group col-md-3">
                     <label for="exampleInputPassword1">Ciudad</label>
                     <input type="text" class="form-control" id="exampleInputPassword1" name="ciudad_estadio"
                        required>
                  </div>
                  <div class="form-group col-md-3">
                     <label class="label_form">País</label>
                     <select class="custom-select" id="validationServer04" name="pais_estadio">
                        <option selected disabled value="">--Seleccione--</option>
                        <?php 
                           include("conexion.php");
                           $conexion = mysqli_connect("localhost", "root","","estadisticas") or die ("Error en la conexión a base de datos");
                           $sql = "SELECT id_pais,nombre_pais,codigo_pais,estado FROM paises
                                   WHERE estado = 'ACT';";
                           
                           $query = $conexion -> query ($sql);
                           
                           while($valores = mysqli_fetch_array($query)){
                             echo "<option value='".$valores['id_pais']."'>".$valores['codigo_pais']." - ".$valores['nombre_pais']."</option>";
                           }
                           ?>
                     </select>
                  </div>
                  <input type="submit" class="btn btn-primary" name="guardar_estadio" value="Guardar"
                     id="boton_guardar"></button>                      
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
   </body>
</html>