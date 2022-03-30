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
    <main class="container">
        <section class="content">
            <form action="index.php" method="POST">
                <div class="form-group row">
                    <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nombre" autocomplete="off" name="nombre" placeholder="Nombre" minlength="5" required pattern="[A-Za-zÀ-ÿ\s]{5,30}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="contra" class="col-sm-2 col-form-label">Contraseña</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="contra" autocomplete="off" name="contra" placeholder="Contraseña" minlength="8" required pattern="[A-Za-z0-9]{8,16}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-10">
                      <button type="submit" class="btn-submit">Iniciar sesión</button>
                    </div>
                  </div>
            </form>
            <?php
              require "login.php";
            ?>
        </section>
    </main>
</body>
</html>