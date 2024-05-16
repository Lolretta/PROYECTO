<?php 
session_start();
session_destroy();

if(isset($_SESSION['username']) )
{
  header("location:INICIOSESION.php");
  die();
}
//connect to database
//Dependiendo de cada computadora cambian las credenciales "la de isnd y TacosAna porque esas son de mi computadora"
$db=mysqli_connect("localhost","root", "isnd","TacosAna");
if($db)
{
  if(isset($_POST['login_btn']))
  {
      $username=mysqli_real_escape_string($db,$_POST['username']);
      $password=mysqli_real_escape_string($db,$_POST['password']);
      $sql="SELECT * FROM cuenta WHERE username='$username' AND password='$password'";
      $result=mysqli_query($db,$sql);
      
      if($result)
      {
     
        if( mysqli_num_rows($result)>=1)
        {
            $_SESSION['message']="You are now Logged In";
            $_SESSION['username']= $username;
            header("location:Empleado/index.html");
        }
       else
       {
            $_SESSION['message']="Username and Password combiation incorrect";
       }
      }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tacos Ana</title>
    <link rel="stylesheet" href="./style-landing.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div id="izq">
        <img id="logo" src="https://scontent.fntr2-1.fna.fbcdn.net/v/t39.30808-6/326542226_699230398416490_947096932246096610_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_ohc=aRDmXZ55Ho4Q7kNvgHwOmu-&_nc_ht=scontent.fntr2-1.fna&oh=00_AYC8x8_09dhQeet9xDoQ8Z42Crhh6czSfWfo6xGnTJifmw&oe=6648684F" alt="Tacos Ana Logo">
        <div id="iniciosesion">
            <p class="manrope-titulo">Ingresa a tu cuenta</p>
            <p class="inter-iniciosesion" style="font-size: 12px;">No tienes una cuenta? <a href="https://web.facebook.com/tacossudadosana/?locale=es_LA&_rdc=1&_rdr">Registrate</a></p>
            <form action="" method="post">
                <p class="inter-iniciosesion">Usuario</p>
                <div>
                    <input type="text" class="inter-iniciosesion" id="username" name="username" placeholder="Ingresa tu usuario">
                </div>
                <p class="inter-iniciosesion">Contraseña</p>
                <div>
                    <input type="password" class="inter-iniciosesion" id="password" name="password" placeholder="Ingresa tu contraseña">
                </div>
                <input type="checkbox" id="checkbox" value="valor"> <label class="inter-iniciosesion">Recordarme</label>
                <a href="./RECUPERAR.php" id="contraseña" class="inter-iniciosesion">Has olvidado tu contraseña?</a>
                <br>
                <input type="submit" class="inter-iniciosesion" value="Iniciar sesión" name="login_btn" style="font-weight: bold;
                color: white; background-color: #98DE00; width: 525px; padding: 10px; border-radius: 8px; margin-top: 50px;">
            </form>
        </div>
    </div>
</body>
</html>