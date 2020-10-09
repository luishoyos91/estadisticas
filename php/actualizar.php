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
                echo "<script>window.open('../estadios.php','_self')</script>";
            }else{
                echo "<script>alert('No se pudo actualizar el registro')</script>";
            }          
        }
    ?>

<!-- Actualizar Jugadores -->
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
                echo "<script>window.open('../estadios.php','_self')</script>";
            }else{
                echo "<script>alert('No se pudo actualizar el registro')</script>";
            }          
        }
    ?>