<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Registrar Estadio - Estadísticas Millonarios</title>
      <?php include "links.php" ?>
   </head>
   <body>
   <?php
    include_once("php/conexion.php");
    include("php/registro.php");    
   ?>
      <?php include "nav.php" ?>
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
      <?php include "footer.php" ?>
      <?php include "scripts.php" ?>
   </body>
</html>