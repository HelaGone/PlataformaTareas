<?php
  $isLogin = false;
  if((isset($_POST['user']) && !empty($_POST['user'])) && (isset($_POST['pass']) && !empty($_POST['pass']))){
    include_once('../connect.php');

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
            echo "Hola: " . $value['nombre'] . ' ' . $value['apellido_pat'];
            $isLogin = true;
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
    <title>Dashboard</title>
  </head>
  <body>
    <section>
      <div class="inner_wrapper">
        <?php if($isLogin): ?>
          <form class="" action="upload.php" method="post">
            <input type="file" name="" value="">
            <input type="submit" name="" value="Enviar">
          </form>
        <?php else: ?>

          <h2>Tu usuario no existe, por favor revisa que tu usuario y contraseña sean correctos</h2>

        <?php endif; ?>
      </div>
    </section>
  </body>
</html>
