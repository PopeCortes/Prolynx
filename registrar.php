<?php
session_start(); // Iniciar la sesión

require "./php/registrar.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="./css/InicioSesion.css">
    <script src="./js/main.js"></script>
    <link rel="stylesheet" href="./css/registrarUsuario.css">
    <title>Prolynx</title>
</head>

<body>

    <div>
        <header>
            <div class="imagen">
                <a href="./productos.php">
                    <img src="./img/logo.webp" alt="Logo">
                </a>
            </div>
            <nav>

                <ul>
                    <?php
                    if ($_SESSION['Privilegio'] == 'Admin') {
                    ?>
                        <li><a href="./registrar.php">Administrador</a></li>
                    <?php } ?>
                    <li><a href="./index2.php">Regresar</a></li>
                    <li class="puertas"><a id="salir" name="btnsalir" class="puertas" href="./php/exit.php" title="Deseas salir <?php echo "" . $_SESSION['Nombre'] . ""; ?>?"><img style="height: 40px; width: 40px;" class="puertas" onmouseout="this.src='https://cdn-icons-png.flaticon.com/128/2607/2607189.png';" onmouseover="this.src='https://cdn-icons-png.flaticon.com/128/2237/2237569.png';" src="https://cdn-icons-png.flaticon.com/128/2607/2607189.png"></a></li>
                </ul>
            </nav>
        </header>
    </div>
    <!--  -->

    <div class="container">
        <!-- Logo -->
        <div class="logo">
            <img src="./img/logo.webp" alt="Imagen de Logo">
        </div>
        <!-- Sesion -->
        <div class="sesion">
            <form action="./registrar.php" method="post" autocomplete="off" onsubmit="return FormularioRegistrarUsuarios()">
                <h1>Registrar</h1>
                <br>

                <label for="">Nombre(s)</label>
                <input class="texto" type="text" name="nombre" id="nombre">
                <br>
                <label for="">Apellido</label>
                <input class="texto" type="text" name="apellido" id="apellido">
                <br>
                <label for="">Usuario</label>
                <input class="texto" type="text" name="usuario" id="usuario">
                <br>
                <label for="">Contraseña</label>
                <input class="texto" type="password" name="password" id="password">
                <br>
                <label for="">Privilegio</label>
                <br>
                <select name="privilegio">
                    <option value="Usuario">Usuario</option>
                    <option value="Admin">Administrador</option>
                </select>
                <br>
                <label for="">Ya tienes cuenta? <a href="./index.php">Inicia sesión</a></label>
                <input class="btn-sesion" type="submit" name="btnregistrar" value="Registrar">
            </form>

        </div>
    </div>

</body>
</html>