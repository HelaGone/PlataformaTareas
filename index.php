<?php
  $showError = false;
  if((isset($_POST['user']) && !empty($_POST['user'])) && (isset($_POST['pass']) && !empty($_POST['pass']))){
    include_once('./connect.php');

    $queryAlumnos = "SELECT * FROM alumnos";
    if( !($result = mysqli_query($dbconn, $queryAlumnos)) ){
      die("Error en el query");
    }else{
      if( mysqli_num_rows($result) == 0 ){
        echo 'No rows returned';
      }else{
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);

        foreach ($result as $key => $value) {
          if( $value['usuario'] == $_POST['user'] ){

            if( md5($_POST['pass']) == $value['pass'] ){
              //TODO: ENVIAR AL USUARIO LOGUEADO AL DASHBOARD
              header("Location: dashbord/index.php");
            }
          }else{
            // $isLogin = true;
          }
        }
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tareas Sexto COVID-19</title>
  </head>
  <body>
    <section>
      <div class="inner_wrapper">
        <form class="" action="" method="post">
          <input type="text" name="user" value="" placeholder="Usuario">
          <input type="text" name="pass" value="" placeholder="Contraseña">
          <input type="submit" name="send" value="Entrar">
        </form>
      </div>

      <?php if($showError): ?>
      <div class="inner_wrapper">
        <h2>Tu usuario o contraseña no existen, por favor revisa que sean correctas. ¡Inténtalo de nuevo!</h2>
      </div>
    <?php endif; ?>
    </section>
  </body>
</html>
