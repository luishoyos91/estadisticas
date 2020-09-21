<?php
    $host = "localhost";
    $user= "root";
    $password = "";
    $database = "estadisticas";
    $port = "";
    
    $con= mysqli_connect($host, $user,$password,$database) or die ("Error en la conexión a base de datos".mysqli_connect_error); 

    /* // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully. ";
    mysqli_close($con); */

    function getConn(){
        $mysqli = mysqli_connect($host, $user,$password,$database);
        if(mysqli_connect_errno($conn)){
            echo "Error al conetarse a la base de datos: ".mysqli_connect_error();
        }
        return $mysqli;
    }  
?>