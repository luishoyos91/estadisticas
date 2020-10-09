<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Jugador- Estadísticas Millonarios</title>
    <?php include "links.php" ?>
</head>
<body>
  <?php
    include_once("php/conexion.php");
    include("php/registro.php");    
    include("php/actualizar.php");
   ?>
  <?php include "nav.php" ?>

  <section>
    <br>
    <div class="container">
      <article>
      <h1>Modificar Jugador</h1>
      <?php
         if(isset($_GET['editar_jugador'])){
            $id_jugador = $_GET['editar_jugador'];
            
            $consulta = "SELECT * FROM jugadores where id_jugador = '$id_jugador'" or die (mysqli_error($con));
            
                  $ejecutar = mysqli_query($con, $consulta);

                  $i=0;

                  while($fila = mysqli_fetch_array($ejecutar)){

                     $id_jugador = $fila['id_jugador'];
                     $nombres = $fila['nombres'];
                     $apellidos = $fila['apellidos']; 
                     $fecha_nacimiento = $fila['fecha_nacimiento'];                        
                     $nacionalidad = $fila['nacionalidad'];
                     $estatura = $fila['estatura'];
                     $perfil = $fila['perfil'];
                     $posicion = $fila['posicion'];                               
                     $valor_mercado = $fila['valor_mercado'];
                     $dorsal = $fila['dorsal'];
                     $estado = $fila['estado'];

                     $i++;
                        
                    
                                
                ?>
                    <?php } ?>
        <form action="php/actualizar.php" method="post">

          <div class="form-row">
            <!--row-->
            <div class="form-group col-md-12" id="formularios">                     
              <input type="hidden" value="<?php echo $id_jugador; ?>" class="form-control" id="id_jugador" name="id_jugador" required>
            </div> 
            <div class="form-group col-md-4" id="formularios">
              <label class="control-label" for="nombres">Nombres</label>
              <input type="text" value="<?php echo $nombres; ?>" class="form-control" id="nombres" name="nombres" minlenght="3" required>
            </div>
            <div class="form-group col-md-4" id="formularios">
              <label class="control-label" for="apellidos">Apellidos</label>
              <input type="text" value="<?php echo $apellidos; ?>" class="form-control" id="apellidos" name="apellidos" minlenght="3" required>
            </div>
            <div class="form-group col-md-2" id="formularios">
                <label for="Check-in">Fecha de Nacimiento</label>
                <input type="text" value="<?php echo $fecha_nacimiento; ?>" readonly="" class="form-control" id="checkin"  name="fecha_nacimiento" placeholder="Seleccione">
            </div>
            <div class="form-group col-md-1" id="formularios">
            </div>
            <div class="form-group col-md-3" id="formularios">
              <label for="label_form">País</label>
              <select class="form-control" id="lista_paises" name="nacionalidad" title="<?php echo $fecha_nacimiento; ?>" required>
              </select>
            </div>
            <div class="form-group col-md-1" id="formularios">
              <label for="estatura">Estatura</label>
              <input type="number" value="<?php echo $estatura; ?>" class="form-control" id="estatura" name="estatura">
            </div>
            <div class="form-group col-md-2" id="formularios">
              <label for="perfil">Perfil</label>
              <select class="form-control" id="perfil" name="perfil">                
                <option value="">--Seleccione--</option>
                <option value="Derecho">Derecho</option>
                <option value="Izquierdo">Izquierdo</option>
              </select>
              <!-- <input type="text" class="form-control" id="perfil" name="perfil">  -->
            </div>
            <div class="form-group col-md-2" id="formularios">
              <label for="posicion">Posición</label>
              <select class="form-control" id="posicion" name="posicion" value="<?php echo $posicion; ?>">
                <option value="">--Seleccione--</option>
                <option value="Arquero">ARQ- Arquero</option>
                <option value="Defensa">DED- Defensa</option>
                <option value="Mediocampista">MED- Mediocampista</option>
                <option value="Delantero">DEL- Delantero</option>
              </select>
              <!-- <input type="text" class="form-control" id="posicion" name="posicion">  -->
            </div>
            <div class="form-group col-md-2" id="formularios">
              <label for="valor_mercado">Valor Mercado</label>
              <input type="number" value="<?php echo $valor_mercado; ?>" class="form-control" id="valor_mercado" name="valor_mercado">
            </div>
            <div class="form-group col-md-1" id="formularios">
              <label for="dorsal">Dorsal</label>
              <input type="number" value="<?php echo $dorsal; ?>" class="form-control" id="dorsal" name="dorsal">
            </div>
            <!-- 
            <div class="form-group col-md-12" id="formularios">
              <label for="estado">Estado</label>
              <input type="text" value="<?php echo $estado; ?>" class="form-control" id="estado" name="estado">
            </div> -->
            <div class="form-group col-md-12" id="formularios">
            </div>
            <div class="form-group col-md-6" id="botones_formularios">
                <input type="submit" class="btn btn-primary" title="Guardar" name="actualizar_jugador" value="Actualizar"
                id="boton_guardar"></button>
                <input type="button" class="btn btn-secondary" title="Cancelar" value="Cancelar" onclick="history.back();">
            </div>
          </div>
          <?php }else{
            echo '<div class="alert alert-danger" id="myAlert"> No se pudo cargar la información a actualizar</div><br></br>';
          } ?>
        </form>
      </article>
    </div>
  </section>
  <?php include "footer.php" ?>
  <?php include "scripts.php" ?>
</body>
</html>