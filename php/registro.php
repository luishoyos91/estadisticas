<?php
    include_once("conexion.php");
?>
<!-- Insertar Estadio -->
<?php
    if(isset($_POST['guardar_estadio'])){
        $nombre_estadio = $_POST['nombre_estadio'];
        $aforo = $_POST['aforo'];        
        $pais_estadio = $_POST['pais_estadio'];
        $ciudad_estadio = $_POST['ciudad_estadio'];
        $insertar_estadio = "INSERT INTO estadios (nombre_estadio,aforo,ciudad,pais,fecha_registro) VALUES ('$nombre_estadio','$aforo','$ciudad_estadio','$pais_estadio',NOW())" or die (mysqli_error($con));        
        $ejecutar = mysqli_query($con, $insertar_estadio);            

        if($ejecutar){
            echo "<script>alert('Registro Guardado Correctamente')</script>";            
            echo "<script>window.open('estadios.php','_self')</script>";
            mysql_close($con);
        }else{
            echo "<script>alert('No se logró realizar el registro')</script>";
            echo "<script>window.open('estadios.php','_self')</script>";
            mysql_close($con);
        }          
    }
?>

<!-- Insertar Jugador -->
<?php
    if(isset($_POST['guardar_jugador'])){
        $nombre_jugador = $_POST['nombres'];
        $apellido_jugador = $_POST['apellidos'];        
        $fecha_nacimiento = $_POST['fecha_nacimiento'];
        $pais = $_POST['nacionalidad'];
        $estatura = $_POST['estatura'];
        $perfil = $_POST['perfil'];
        $posicion = $_POST['posicion'];
        $valor_mercado = $_POST['valor_mercado'];
        $dorsal = $_POST['dorsal'];
        $estado = 'ACT';
        

        $insertar_jugador = "INSERT INTO jugadores (nombres,apellidos,fecha_nacimiento,nacionalidad,estatura,perfil,
        posicion,valor_mercado,dorsal,estado,fecha_registro) 
        VALUES ('$nombre_jugador','$apellido_jugador','$fecha_nacimiento','$pais','$estatura', '$perfil','$posicion',
        '$valor_mercado','$dorsal','$estado',NOW())" or die (mysqli_error($con));        
        $ejecutar = mysqli_query($con, $insertar_jugador);            

        if($ejecutar){
            echo "<script>alert('Jugador Registrado Correctamente')</script>";            
            echo "<script>window.open('jugadores.php','_self')</script>";
            mysql_close($con);
        }else{
            echo "<script>alert('No se logró realizar el registro')</script>";
            echo "<script>window.open('jugadores.php','_self')</script>";
            mysql_close($con);
        }          
    }
?>