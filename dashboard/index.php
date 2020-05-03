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
