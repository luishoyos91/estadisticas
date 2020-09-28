<?php 
include_once 'conexion.php';

function getCiudades(){
  $conexion = mysqli_connect("localhost", "root","","estadisticas") or die ("Error en la conexión a base de datos");  
  $mysqli = $conexion;
  $id = $_POST['id_pais'];
  $query = "SELECT * FROM ciudades WHERE id_pais = $id ORDER BY nombre_ciudad";
  $result = $mysqli->query($query);
  $ciudades = '<option value="0">--Seleccione--</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $ciudades .= "<option value='$row[id_ciudad]'>$row[nombre_ciudad]</option>";
  }
  return $ciudades;
}

echo getCiudades();