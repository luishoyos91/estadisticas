<?php
    include_once("conexion.php");
?>

<?php
    if(isset($_GET['eliminar_estadio'])){
        $borrar_id = $_GET['eliminar_estadio'];

        $borrar_estadio = "DELETE FROM estadios WHERE id_estadio = $borrar_id";
        
        $ejecutar = mysqli_query($con,$borrar_estadio);

        if($ejecutar){
            echo "<script>alert('Datos Eliminados!')</script>";
            echo "<script>window.open('estadios.php','_self')</script>";
        }
    }
?>