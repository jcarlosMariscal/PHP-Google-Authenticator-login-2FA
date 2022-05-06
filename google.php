<?php
// PUEDES OMITIR ESTE ARCHIVO
    declare(strict_types=1);
    require 'vendor/autoload.php';
    $secret = 'XVQ2UIGO75XRUKJO';
    $enlace = \Sonata\GoogleAuthenticator\GoogleQrUrl::generate('mar', $secret, 'AutenticacionUsuario');
    $g = new \Sonata\GoogleAuthenticator\GoogleAuthenticator();

    session_start();
    if(isset($_SESSION['user'])){
        header("Location: main.php");
    }
    if(!$_SESSION['nombre']) header("Location: index.php");
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
    <main class="">
        <section class="content">
                <div class="qr">
                <img src="<?php echo $enlace;?>" alt="">
                <!-- <h2>Autenticación de 2FA usando Google Authenticator</h2> -->
                <hr>
                <p>Por favor, escanee el código QR desde su dispositivo móvil, para ello, instale la aplicación <b>Google Authenticator</b> para generar el código que se necesita para iniciar sesión.</p>
            </div>
            <form action="" method="POST">
                <div class="form-group row">
                    <div class="col-sm-10">
                        <input type="text" class="code form-control" autocomplete="off" name="code" placeholder="Escriba el código">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-10">
                      <input type="submit" name="submit" value="Iniciar sesión" class="btn-submit btn-qr">
                    </div>
                  </div>
            </form>
            <?php
                if(isset($_POST['submit'])){
                    $code = $_POST['code'];
                    if ($g->checkCode($secret, $code)) {
                        $_SESSION['user'] = $_SESSION['nombre'];
                        unset($_SESSION["nombre"]);
                        header("Location: main.php");
                    } else {
                        echo "<div class='errFormato'>El código no coincide<div>";
                    }
                }
                // unset($_SESSION["nombre"]);
            ?>
        </section>
    </main>
</body>
</html>