<?php
    include_once("conexion.php");
?>

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