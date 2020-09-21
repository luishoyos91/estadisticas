<?php 
require_once 'conexion.php';

function getListaPaises(){
  $conexion = mysqli_connect("localhost", "root","","estadisticas") or die ("Error en la conexión a base de datos");
  $mysqli = $conexion;
  $query = 'SELECT * FROM paises';
  $result = $mysqli->query($query);
  $listas = '<option value="0">--Seleccione--</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $listas .= "<option value='$row[id_pais]'>$row[codigo_pais] - $row[nombre_pais]</option>";
  }
  return $listas;
}

echo getListaPaises();  