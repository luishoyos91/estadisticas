<?php
    include_once("conexion.php");
?>
<!-- Eliminar Estadios -->
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

<!-- Eliminar Jugadores -->

<?php
    if(isset($_GET['eliminar_jugador'])){
        $borrar_id_jugador = $_GET['eliminar_jugador'];

        $borrar_jugador = "DELETE FROM jugadores WHERE id_jugador = $borrar_id_jugador";
        
        $ejecutar = mysqli_query($con,$borrar_jugador);

        if($ejecutar){
            echo "<script>alert('Datos Eliminados!')</script>";
            echo "<script>window.open('jugadores.php','_self')</script>";
        }else{
            echo "<script>alert('No se Eliminó el registro!')</script>";
        }
    }
?>