<?php
    session_start();
    // REEMPLAZAR LA SESION user CON LA SESION nombre
    if(!$_SESSION['user']){
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Bienvenido</title>
</head>
<body>
    <main class="container">
        <section class="content">
            <div class="bienvenida">
                <h3 class="success">Bienvenido <?php echo $_SESSION['user']; ?>
                <a class="btn-b" href="cerrar.php">Cerrar sesión</a>
                </h3>
            </div>
            <hr>
            <article>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum amet rem, qui quis sapiente repudiandae nesciunt temporibus facilis, et tenetur ducimus a iure laboriosam? Deleniti officia eos iure magnam molestias! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus, possimus?</p>
            </article>
            <div class="info">
                <img src="https://www.ambientum.com/wp-content/uploads/2019/10/bola-medio-ambiente-696x464.jpg" alt="imagen">
                <img src="https://responsabilidadsocial.net/wp-content/uploads/2019/08/medio-ambiente-dia-mundial-que-es-significado-definicion-caracteristicas-cuidado-carteles.jpg" alt="imagen">
            </div>
            <article>
                <hr>
            </article>
        </section>
    </main>
</body>
</html>