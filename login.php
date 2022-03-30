<?php
    $url= $_SERVER["REQUEST_URI"];
    if($url === "/Projects/DWP-Autentificacion_de_usuario/login.php") header("Location: index.php");
    $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : "";
    $contra = (isset($_POST['contra'])) ? $_POST['contra'] : "";

    if(isset($_POST['nombre']) && isset($_POST['contra'])){
        if(!preg_match("/^[A-Za-zÀ-ÿ\s]{5,30}$/",$nombre) && !preg_match("/[A-Za-z0-9]{8,16}/",$contra)){
            echo "<div class='errFormato'>Verifique que el nombre y la contraseña cumplen con el formato solicitado</div>";
        }else{
            if($nombre === "carlos" && $contra === "carlos2022"){
                session_start();
                $_SESSION['nombre'] = $nombre;
                // YA NO HACER VALIDACIÓN CON EL QR, SIMPLEMENTE USAR LA SESIÓN ACTUAL. OMITIR LA REDIRECCIÓN A google.php Y MANDAR A main.php
                header("Location: google.php");
            }else{
                echo "<div class='errFormato'>Verifique que su usuario y contraseña sean correctos.</div>";
            }
        }
    }
