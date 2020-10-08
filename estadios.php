<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadios - Estadísticas Millonarios</title>
    <?php include "scripts.php" ?>
</head>
<body>
<?php
    include_once("php/conexion.php");
    include("php/registro.php");
    include("php/eliminar.php");  
?>
<?php include "nav.php" ?>
    <section>
        <br>
        <div class="container">
            <article>
                <div class="col-md-4">
                <?php
                    if(isset($mensaje)){
                        echo $mensaje;
                    }
                ?>
                </div>
                <h1>Estadios</h1>
                <a href="crear_estadio.php"> <img src="iconos/add.svg" class="icono_registrar" alt="registrar"
                        title="Registrar Estadio"></a>
                <br>
                <br>
                <table class="table table-hover table-striped table-responsive" id="tablas">
                    <thead>
                        <tr>
                            <!--  <th scope="col">#</th> -->
                            <th scope="col">Nombre</th>
                            <th scope="col">Aforo</th>
                            <th scope="col">País</th>
                            <th scope="col">Ciudad</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            /* Paginador */
                            $sql_registre = mysqli_query($con,"SELECT COUNT(*) AS total_registros FROM estadios");
                            $result_registre = mysqli_fetch_array($sql_registre);
                            $total_registro = $result_registre['total_registros'];

                            /* Variable para mostrar la cantidad de registros por página */
                            $por_pagina = 5;

                            if(empty($_GET['pagina']))
                            {
                                $pagina = 1;
                            }else{
                                $pagina = $_GET['pagina'];
                            }

                            $desde = ($pagina -1) * $por_pagina;
                            $total_paginas = ceil($total_registro / $por_pagina);


                            $consulta = "SELECT e.id_estadio,e.nombre_estadio,e.aforo,c.nombre_ciudad,p.nombre_pais FROM estadios e
                                        LEFT JOIN paises p ON e.pais = p.id_pais
                                        LEFT JOIN ciudades c ON e.ciudad = c.id_ciudad
                                        ORDER BY e.id_estadio
                                        LIMIT $desde,$por_pagina";                    
                            $ejecutar = mysqli_query($con, $consulta);

                            $i=0;

                            while($fila = mysqli_fetch_array($ejecutar)){                       
                                $id = $fila['id_estadio'];
                                $aforo = number_format($fila['aforo'], 0, ',', '.');
                                $nombre_estadio = $fila['nombre_estadio']; 
                                $pais = $fila['nombre_pais'];                        
                                $ciudad = $fila['nombre_ciudad'];                                         

                                $i++;
                                    
                        ?>

                        <tr>
                            <!--  <th scope="row"><?php echo $id; ?></th> -->
                            <td><?php echo $nombre_estadio; ?></td>
                            <td><?php echo $aforo; ?></td>
                            <td><?php echo $pais; ?></td>
                            <td><?php echo $ciudad; ?></td>
                            <td><a href="actualizar_estadio.php?editar_estadio=<?php echo $id; ?>"> <img
                                        src="iconos/162-edit.svg" class="icono_eliminar" alt="icono_eliminar"
                                        title="Editar"></a>
                                <a href="estadios.php?eliminar_estadio=<?php echo $id; ?>"> <img
                                        src="iconos/delete.svg" class="icono_eliminar" alt="icono_eliminar"
                                        title="Eliminar"></a>
                            </td>
                        </tr>
                        
                        <?php } ?>

                    </tbody>
                </table>
                <br>
                <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <?php
                        if($pagina != 1)
                        {
                    ?>
                    <li class="page-item"><a class="page-link" href="?pagina=<?php echo 1;?>"><<</a></li>
                    <li class="page-item"><a class="page-link" href="?pagina=<?php echo $pagina -1;?>"><</a></li>
                    <?php
                        }else{
                         echo '<li class="page-item disabled"><a class="page-link" href="?pagina=<?php echo 1;?>"><<</a></li>';
                         echo '<li class="page-item disabled"><a class="page-link" href="?pagina=<?php echo $pagina -1;?>"><</a></li>';   
                        }
                        for ($i=1; $i <= $total_paginas; $i++ ){
                            if($i == $pagina){
                                echo '<li class="page-item active"><a class="page-link" href="#">'.$i.'</a></li>';
                            }else{
                                echo '<li class="page-item"><a class="page-link" href="?pagina='.$i.'">'.$i.'</a></li>';
                            }                            
                        }
                        if($pagina != $total_paginas)
                        {
                        
                    ?>

                    <li class="page-item"><a class="page-link" href="?pagina=<?php echo $pagina +1;?>">></a></li>
                    <li class="page-item"><a class="page-link" href="?pagina=<?php echo $total_paginas;?>">>></a></li>

                    <?php }else{
                        echo'<li class="page-item disabled"><a class="page-link" href="?pagina=<?php echo $pagina +1;?>">></a></li>';
                        echo '<li class="page-item disabled"><a class="page-link" href="?pagina=<?php echo $total_paginas;?>">>></a></li>';
                    }
                    
                    ?>
                </ul>
                </nav>
                <br>
            </article>
        </div>
    </section>
    <?php include "footer.php" ?>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>