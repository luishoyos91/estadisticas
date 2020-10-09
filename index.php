<?php
  $alert='';
  session_start();
  if(!empty($_SESSION['active'])){
    header('location: home.php');
  }else{

    if(!empty($_POST))
    {
      if (empty($_POST['usuario']) || empty($_POST['password'])) {
        /*  $alert ='Ingrese su usuario y su clave';*/
        $alert = '<div class="alert alert-danger" id="myAlert">                  
                  Ingrese su usuario y su clave</div>';
      }else{
        require_once("php/conexion.php");
        $user = mysqli_real_escape_string( $con,$_POST['usuario']);
        $pass = md5(mysqli_real_escape_string( $con,$_POST['password']));
        $consultauser = "SELECT * FROM usuarios WHERE nickname = '$user' AND clave = '$pass'";

        $query = mysqli_query($con,$consultauser);
        $result = mysqli_num_rows($query);

        if($result > 0){
          $data = mysqli_fetch_array($query);          
          $_SESSION['active'] = true;
          $_SESSION['idUser'] = $data['id_usuario'];
          $_SESSION['nombre'] = $data['nombre'];
          $_SESSION['email'] = $data['correo'];
          $_SESSION['user'] = $data['nickname'];
          $_SESSION['rol'] = $data['rol'];         

          header('location: home.php');
        }else
        {
          /*  $alert = 'El usuario o la clave son incorrectas';*/
          $alert = '<div class="alert alert-danger" id="myAlert">                    
          Usuario y/o Password Incorrectos</div>';   
          session_destroy();
        }
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadísticas Millonarios</title>
    <?php include "links.php" ?>
</head>
<body>
<section>
  <div class="LogoLogin">
    <img src="iconos/millonarios.png" class="LogoLogin2">
  </div>
  <div class="well col-md-5 col-sm-5 col-xs-9 center login-box">
    <div class="alert alert-info">
        <p>Ingreso al sistema</p> 
    </div>                 
  <div id="messages">
  </div>
    <form action="" method="post">
      <fieldset>
        <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input class="form-control" id="Login" name="usuario" placeholder="Usuario" type="text" value="">
        </div>
        <div class="clearfix">
        </div>
        <br>
        <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
          <input class="form-control" id="Password" name="password" placeholder="Contraseña" type="password" value="">
        </div>
        <div class="clearfix"></div>
        <div class="clearfix"></div>
        <br>        
          <?php echo isset($alert) ? $alert : ''; ?>          
        <button type="submit" class="btn btn-primary" value="ingresar">Ingresar</button>
        <div class="clearfix"></div>
      </fieldset>
    </form>   
  </div>
</section>
<?php include "footer.php" ?>
<?php include "scripts.php" ?>
</body>
</html>