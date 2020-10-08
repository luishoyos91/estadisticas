<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Estadios - Estadísticas Millonarios</title>
      <?php include "scripts.php" ?>
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
               <h1>Actualizar Estadio</h1>
               <?php
                    if(isset($_GET['editar_estadio'])){
                        $id_estadio = $_GET['editar_estadio'];
                        
                        $consulta = "SELECT * FROM estadios where id_estadio = '$id_estadio'" or die (mysqli_error($con));
                        
                            $ejecutar = mysqli_query($con, $consulta);

                            $i=0;

                            while($fila = mysqli_fetch_array($ejecutar)){
                                $id = $fila['id_estadio'];                                
                                $nombre_estadio = $fila['nombre_estadio']; 
                                $aforo = $fila['aforo'];
                                $pais_estadio = $fila['ciudad'];                        
                                $ciudad_estadio = $fila['pais'];

                                $i++;
                        
                    
                                
                ?>
                    <?php } ?>

               <form method="POST" action="php/actualizar.php">  
                 <div class="form-group col-md-6" id="formularios">                     
                     <input type="hidden" value="<?php echo $id; ?>" class="form-control" id="id_estadio" aria-describedby="emailHelp"
                        name="id_estadio" required>
                </div>                
                  <div class="form-group col-md-6" id="formularios">
                     <label class="control-label" for="nombre">Nombre</label>
                     <input type="text" value="<?php echo $nombre_estadio; ?>" class="form-control" id="nombre" aria-describedby="emailHelp"
                        name="nombre_estadio" minlenght="3" required>
                  </div>
                  <div class="form-group col-md-6" id="formularios">
                     <label for="aforo">Aforo</label>
                     <input type="number" value="<?php echo $aforo; ?>" class="form-control" id="aforo" name="aforo">
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
                     <input type="submit" class="btn btn-primary" title="Actualizar Estadio" name="actualizar_estadio" value="Actualizar"
                     id="boton_guardar"></button>
                     <input type="button" class="btn btn-secondary" title="Cancelar" value="Volver" onclick="history.back();">
                  </div>
                  <?php } ?>
                     <br>                
               </form>               
            </article>
         </div>
      </section>
      <?php include "footer.php" ?>
      <script type="text/javascript" src="js/script.js"></script>
   </body>
</html>