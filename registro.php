<?php
    include_once("conexion.php");
?>

<?php
    if(isset($_POST['guardar_estadio'])){
        $nombre_estadio = $_POST['nombre_estadio'];
        $aforo = $_POST['aforo'];
        $ciudad_estadio = $_POST['ciudad_estadio'];
            $pais_estadio = $_POST['pais_estadio'];
        $insertar_estadio = "INSERT INTO estadios (nombre_estadio,aforo,ciudad,pais) VALUES ('$nombre_estadio','$aforo','$ciudad_estadio','$pais_estadio')" or die (mysqli_error($con));
        var_dump($insertar_estadio);
        $ejecutar = mysqli_query($con, $insertar_estadio);            

        if($ejecutar){
            echo "<script>alert('Registro Guardado Correctamente')</script>";
            echo "<script>window.open('estadios.php','_self')</script>";
            mysql_close($con);
        }else{
            echo "<script>alert('Usuario No Guardado')</script>";
            echo "<script>window.open('estadios.php','_self')</script>";
            mysql_close($con);
        }          
    }
?>