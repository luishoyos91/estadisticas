<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jugadores - Estadísticas Millonarios</title>
    <?php include "links.php" ?>
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
                <h1>Jugadores</h1>
                <a href="crear_jugador.php"> <img src="iconos/add.svg" class="icono_registrar" alt="registrar"
                        title="Registrar Jugador"></a>
                <br>
                <br>
                <table class="table table-hover table-striped table-responsive" id="tablas">
                    <thead>
                        <tr>
                            <!--  <th scope="col">#</th> -->
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Fecha de <br>Nacimiento</th>
                            <th scope="col">País</th>
                            <th scope="col">Estatura</th>
                            <th scope="col">Perfil</th>
                            <th scope="col">Posición</th>
                            <th scope="col">Valor<br>Mercado</th>
                            <th scope="col">Dorsal</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            /* Paginador */
                            $sql_registre = mysqli_query($con,"SELECT COUNT(*) AS total_registros FROM jugadores");
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


                            $consulta = "SELECT j.id_jugador,j.nombres, j.apellidos, j.fecha_nacimiento, 
                            p.nombre_pais , j.estatura, j.perfil, j.posicion, j.valor_mercado,j.dorsal,j.estado
                            FROM jugadores j
                            INNER JOIN paises p ON j.nacionalidad = p.id_pais 
                            ORDER BY j.posicion
                                        LIMIT $desde,$por_pagina";                    
                            $ejecutar = mysqli_query($con, $consulta);

                            $i=0;
                            
                            while($fila = mysqli_fetch_array($ejecutar)){                       
                                $id = $fila['id_jugador'];
                                $nombres = $fila['nombres'];
                                $apellidos = $fila['apellidos']; 
                                $fecha_nacimiento = $fila['fecha_nacimiento'];                        
                                $nacionalidad = $fila['nombre_pais'];
                                $estatura = $fila['estatura'];
                                $perfil = $fila['perfil'];
                                $posicion = $fila['posicion'];                               
                                $valor_mercado = $fila['valor_mercado'];
                                $dorsal = $fila['dorsal'];
                                $estado = $fila['estado'];

                                $i++;
                                    
                        ?>

                        <tr>
                            <!--  <th scope="row"><?php echo $id; ?></th> -->
                            <td><?php echo $nombres; ?></td>
                            <td><?php echo $apellidos; ?></td>
                            <td><?php echo $fecha_nacimiento; ?></td>
                            <td><?php echo $nacionalidad; ?></td>
                            <td><?php echo $estatura; ?></td>
                            <td><?php echo $perfil; ?></td>
                            <td><?php echo $posicion; ?></td>                            
                            <td><?php echo number_format($valor_mercado, 0, ',', '.')." €"; ?></td>
                            <td><?php echo $dorsal; ?></td>
                            <td><?php echo $estado; ?></td>
                            <td><a href="actualizar_jugador.php?editar_jugador=<?php echo $id; ?>"> <img
                                        src="iconos/162-edit.svg" class="icono_eliminar" alt="icono_eliminar"
                                        title="Editar"></a>
                                <a href="jugadores.php?eliminar_jugador=<?php echo $id; ?>"> <img
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
    <?php include "scripts.php" ?>
</body>

</html>