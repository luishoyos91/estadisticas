<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadios</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"></script>
</head>
<body>
<?php
    include_once("php/conexion.php");
    include("php/registro.php");
    include("php/eliminar.php");  
?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="iconos/millonarios.png" width="40" height="40" alt="" loading="lazy">
     </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="estadios.php">Estadios</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>
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
                $consulta = "SELECT e.id_estadio,e.nombre_estadio,e.aforo,c.nombre_ciudad,p.nombre_pais FROM estadios e
                     LEFT JOIN paises p ON e.pais = p.id_pais
					 LEFT JOIN ciudades c ON e.ciudad = c.id_ciudad";                    
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
                            <td><a href="crear_estadio.php?editar_estadio=<?php echo $id; ?>"> <img
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
            </article>
        </div>
    </section>
    <footer>
        <hr width="95%" color="#343a40">
        <div class="iconosredes" id="redessociales">
            <div class="ajusteicono">
                <a target="_blank" href="https://www.facebook.com/luishoyos91"><img src="iconos/facebook.svg"
                        alt="facebook" title="Facebook" width="30px" height="30px"></a>
            </div>
            <div class="ajusteicono">
                <a target="_blank" href="https://twitter.com/luishoyos91"><img src="iconos/twitter.svg" alt="twitter"
                        title="Twitter" width="30px" height="30px"></a>
            </div>
            <div class="ajusteicono">
                <a target="_blank" href="https://www.instagram.com/luishoyos91"><img src="iconos/instagram.svg"
                        alt="instagram" title="Instagram" width="30px" height="30px"></a>
            </div>
        </div>
        <div class="textofooter">
            <p class="parrafo_footer">© COPYRIGHT 2020 Bogotá D.C.
                <br>
                Creado por <strong> Ing. Luis Hoyos para Millonarios FC</strong>
            </p>
        </div>
    </footer>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>