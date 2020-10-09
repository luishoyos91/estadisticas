<?php
    session_start();
    if(empty($_SESSION['active'])){
      header('location: index.php');
    }
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="home.php">
    <img src="iconos/millonarios.png" width="30" height="30" alt="Logotipo" loading="lazy">
  </a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="jugadores.php">Jugadores</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Club
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="jugadores.php">Jugadores</a>          
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Estadísticas por Jugador</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Estadísticas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Partidos</a>
          <a class="dropdown-item" href="#">Alineaciones</a>
          <a class="dropdown-item" href="#">Uniformes</a>
          <a class="dropdown-item" href="#">Goles</a>
          <a class="dropdown-item" href="#">Tarjetas</a>
          <a class="dropdown-item" href="#">Penales</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Tabla de posiciones</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Configuración
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="estadios.php">Administrar Estadios</a>          
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Crear menú aquí</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#redessociales">Redes Sociales</a>
      </li>
    </ul>
    <div class="form-inline my-2 my-lg-0">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="php/salir.php">Salir</a>
        </li>
      </ul>
    </div>
  </div>
</nav>