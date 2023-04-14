<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require "./php/sesion.php";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link de style.css -->
    <link rel="stylesheet" href="./css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>


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
                    <?php if ($_SESSION['Privilegio'] == 'Admin') { ?>
                        <li><a href="./registrar.php">Registrar Usuario</a></li>
                    <?php } ?>
                    <li class="puertas"><a id="salir" name="btnsalir" class="puertas" href="./php/exit.php" title="Deseas salir <?php echo "" . $_SESSION['Nombre'] . ""; ?>?"><img style="height: 40px; width: 40px;" class="puertas" onmouseout="this.src='https://cdn-icons-png.flaticon.com/128/2607/2607189.png';" onmouseover="this.src='https://cdn-icons-png.flaticon.com/128/2237/2237569.png';" src="https://cdn-icons-png.flaticon.com/128/2607/2607189.png"></a></li>
                    <li><img class="imagen-menu" src="https://cdn-icons-png.flaticon.com/128/6015/6015685.png" alt=""></li>
                </ul>
            </nav>
        </header>
    </div>


    <div class="container">
        <!-- Productos -->
        <div class="container-img">
            <div class="div-img">
                <a href="./productos.php">
                    <h1 class="image-text">Productos</h1>
                    <img class="img-container" title="Productos" src="./img/Producto.webp" alt="Imagen de Producto">
                </a>
            </div>
        </div>
        <!-- ~~~~~~~~~~~~~ -->

        <!-- Almacen -->
        <div class="container-img">
            <div class="div-img">
                <a href="./almacen.php">
                    <h1 class="image-text">Almacen</h1>
                    <img class="img-container" title="Almacen" src="./img/Almacen.webp" alt="Imagen de Almacen">
                </a>
            </div>
        </div>

    </div>
    <!-- NO ELIMINAR -->
    <div class="imagen-logo">
        <img src="" alt="">
    </div>


</body>

</html>