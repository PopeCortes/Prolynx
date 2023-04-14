<!DOCTYPE html>
<html lang="en">
<!-- php - producto -->
<?php
session_start(); // Iniciar la sesión

// hacemos llamar la carpeta "DB/conexion_bd.php"
require "DB/conexion_bd.php";
$obj = new BD_PDO();

// Insertamos los datos despues de picarle "btnregistro"
if (isset($_POST['btnregistro'])) {
    $Num_Part = $_POST['Num_Part'];
    $descripcion = $_POST['descripcion'];
    $marca = $_POST['marca'];
    $lim_inf = $_POST['lim_inf'];
    $lim_sup = $_POST['lim_sup'];
    $tipo_producto = $_POST['tipo_producto'];
    $obj->Ejecutar_Instruccion("INSERT INTO producto(num_part, descripcion, marca, lim_inf, lim_sup, tipo_producto)
    VALUES('$Num_Part', '$descripcion', '$marca', '$lim_inf', '$lim_sup', '$tipo_producto')");
} else {
}
// concatenamos los id de las marcas
$marca_dts = $obj->listados("SELECT id, concat(marca,'') AS marca FROM marca", "SELECT id FROM producto WHERE id");


if(isset($_POST['btnsalir'])){
    header("location: ./index.php ");
}
?>



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- js alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- Link del diseño -->
    <link rel="stylesheet" href="./css/product.css">

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
                    <li><a href="#Home">Inicio</a></li>
                    <li><a href="#Regresar">Regresar</a></li>
                    <li class="puertas"><a name="btnsalir" class="puertas" href="./index.php" title="Salir"><img
                                style="height: 40px; width: 40px;" class="puertas"
                                onmouseout="this.src='https://cdn-icons-png.flaticon.com/128/2607/2607189.png';"
                                onmouseover="this.src='https://cdn-icons-png.flaticon.com/128/2237/2237569.png';"
                                src="https://cdn-icons-png.flaticon.com/128/2607/2607189.png"></a></li>
                </ul>
            </nav>
        </header>
    </div>

    <div class="container">
        <form action="./productos.php" method="post" name="frminsert" id="frminsert">
            <div class="formulario">
                <label for="">Num_Part</label>
                <input name="Num_Part" class="texto" type="text">
                <br>
                <label for="">descripcion</label>
                <input name="descripcion" class="texto" type="text">
                <br>
                <label for="Marca">marca</label>
                <select class="controls" required class="texto" name="marca" id="marca">
                    <option required value="">Seleccione marca</option>
                    <option value="<?php echo $marca_dts ?>"><?php echo $marca_dts; ?></option>
                </select>
                <br>
                <label for="">lim_inf</label>
                <input name="lim_inf" class="texto" type="text">
                <br>
                <label for="">lim_sup</label>
                <input name="lim_sup" class="texto" type="text">
                <br>
                <label for="">tipo_producto</label>
                <input name="tipo_producto" class="texto" type="text">
                <br>
                <input name="btnregistro" class="btn_insert" type="submit" value="Insertar">
            </div>
        </form>
    </div>

    <script src="./js/main.js"></script>
</body>

</html>