<?php
session_start();
require "./php/sesion.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/InicioSesion.css">
    <link rel="shortcut icon" href="./img/user.png" type="image/x-icon">
    
    <title>Prolynx</title>
</head>

<body>
    <div class="container">
        <!-- Logo -->
        <div class="logo">
            <img src="./img/logo.webp" alt="Logo de la empresa">
        </div>
        <!-- Sesion -->
        <div class="sesion">
            <form action="" method="post" autocomplete="off">
                <h1>Inicio de sesion</h1>
                <br>
                <label for="">Usuario</label>
                <input class="texto" type="text" name="usuario" id="correo">
                <br>
                <label for="">Contraseña</label>
                <input class="texto" type="password" name="password" id="password">
                <br>
                <!-- <label for="">No tienes cuenta? <a href="./registrar.php">Registrate</a></label> -->
                <input class="btn-sesion" type="submit" name="btnentrar" value="Entrar">
            </form>


        </div>
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>