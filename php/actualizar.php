<?php

    include_once("conexion.php");    
    
?>
<!-- Actualizar Estadios -->
<?php
        if(isset($_POST['actualizar_estadio'])){
            $id_estadio = $_POST['id_estadio'];            
            $nombre_estadio = $_POST['nombre_estadio'];
            $aforo = $_POST['aforo'];
            $ciudad = $_POST['ciudad_estadio'];
            $pais = $_POST['pais_estadio'];
            $consulta = "UPDATE estadios SET nombre_estadio ='$nombre_estadio', aforo ='$aforo', 
                        ciudad ='$ciudad', pais = '$pais', fecha_registro=NOW() 
                        WHERE id_estadio = $id_estadio" or die (mysqli_error($con));            
            $ejecutar = mysqli_query($con, $consulta);              

            if($ejecutar){                
                echo "<script>alert('Estadio Actualizado Correctamente')</script>";
               /*   echo "<script>window.open('../estadios.php','_self')</script>"; */
            }else{
                echo "<script>alert('No se pudo actualizar el registro')</script>";
            }          
        }
    ?>

<!-- Actualizar Jugadores -->
<?php
        if(isset($_POST['actualizar_jugador'])){
            $id_jugador = $_POST['id_jugador'];
            $nombres = $_POST['nombres'];
            $apellidos = $_POST['apellidos']; 
            $fecha_nacimiento = $_POST['fecha_nacimiento'];                        
            $nacionalidad = $_POST['nacionalidad'];
            $estatura = $_POST['estatura'];
            $perfil = $_POST['perfil'];
            $posicion = $_POST['posicion'];                               
            $valor_mercado = $_POST['valor_mercado'];
            $dorsal = $_POST['dorsal'];
            $estado = 'ACT';
            $query_jugadores = "UPDATE jugadores SET nombres = '$nombres', apellidos = '$apellidos', 
                        fecha_nacimiento= '$fecha_nacimiento',
                        nacionalidad = $nacionalidad, estatura= $estatura, perfil = '$perfil',
                        posicion = '$posicion', valor_mercado = $valor_mercado,
                        dorsal = $dorsal, estado ='$estado'
                        WHERE id_jugador = $id_jugador" or die (mysqli_error($con));            
            $ejecutar2 = mysqli_query($con, $query_jugadores);              

            if($ejecutar2){
                echo "<script>alert('Jugador Modificado Correctamente')</script>";
                echo "<script>window.open('../jugadores.php','_self')</script>";
            }else{
                var_dump ($query_jugadores) ;
                echo "<script>alert('No se pudo modificar el jugador')</script>";
                $error_act = '<div class="alert alert-danger" id="myAlert"> Error Actualizando el Jugador</div>';
                
            }          
        }
    ?>