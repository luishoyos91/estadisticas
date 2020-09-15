<?php
    $host = "localhost";
    $user= "root";
    $password = "";
    $database = "estadisticas";
    $port = "";
    
    $con= mysqli_connect($host, $user,$password,$database) or die ("Error en la conexión a base de datos");

    /* // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully. ";
    mysqli_close($con); */
?>