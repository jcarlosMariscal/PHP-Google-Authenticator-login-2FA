<?php
  session_start();
  if(isset($_SESSION['user'])){
    header("Location: main.php");
  }
  if(isset($_SESSION['nombre'])) header("Location: google.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Autenticación Usuario</title>
</head>
<body>
    <main>
        <section class="content">
          <div class="info-login">
            <h3>Log in</h3>
            <p>Welcome back! Login to access your security dashboard.</p>
            <div class="btn-login">
              <a href="index.html">Atrás</a>
            </div>
          </div>
          <div class="formulario">
          <form action="index.php" method="POST">
                <div class="nombre">
                    <!-- <label for="nombre" class="col-sm-2 col-form-label">Nombre</label> <br> -->
                    <div class="col-sm-10">
                      <input type="text" class="in" id="nombre" autocomplete="off" name="nombre" placeholder="Nombre" minlength="5" required pattern="[A-Za-zÀ-ÿ\s]{5,30}">
                    </div>
                  </div>
                  <div class="pass">
                    <!-- <label for="contra" class="col-sm-2 col-form-label">Contraseña</label> <br> -->
                    <div class="col-sm-10">
                      <input type="password" class="in" id="contra" autocomplete="off" name="contra" placeholder="Contraseña" minlength="8" required pattern="[A-Za-z0-9]{8,16}">
                    </div>
                  </div>
                  <div class="">
                    <div class="col-sm-10">
                      <button type="submit" class="btn-submit">Iniciar sesión</button>
                    </div>
                  </div>
            </form>
          </div>
            <?php
              require "login.php";
            ?>
        </section>
    </main>
</body>
</html>