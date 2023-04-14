<!DOCTYPE html>
<html lang="en">

<!-- PHP -Almacen -->
<?php
session_start(); // Iniciar la sesión
require "./php/almacen.php";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/almacen.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="shortcut icon" href="./img/cajas.png" type="image/x-icon">
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="./js/main.js"></script>

    <title>Prolynx</title>
    <script>
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function() {
            myInput.focus()
        })
    </script>
</head>

<body>

    <header>
        <div class="imagen">
            <a href="./almacen.php">
                <img src="./img/logo.webp" alt="Logo">
            </a>
        </div>
        <nav>
            <ul>
                <li><a class="link" href="#Insert-Almacen" data-bs-toggle="modal" data-bs-target="#almacen">Insertar Almacén</a></li>
                <li><a class="link" href="#Insert-Productos" data-bs-toggle="modal" data-bs-target="#ProductoModal">Insertar Productos</a></li>
                <li><a class="link" href="./index2.php">Regresar</a></li>
                <li class="puertas"><a name="btnsalir" class="puertas" href="./index.php" title="Cerrar sesión"><img style="height: 40px; width: 40px;" class="puertas" onmouseout="this.src='https://cdn-icons-png.flaticon.com/128/2607/2607189.png';" onmouseover="this.src='https://cdn-icons-png.flaticon.com/128/2237/2237569.png';" src="https://cdn-icons-png.flaticon.com/128/2607/2607189.png"></a></li>
            </ul>
        </nav>
    </header>

    <!-- Tabla -->
    <form action="./almacen.php" id="frmbuscar" name="frmbuscar" method="post">
        <table id="container-table">
            <div class="busqueda">
                <input class="search text-search" autocomplete="off" type="search" name="buscar" id="buscar">
                <input class="search btn-search" type="submit" id="btnbuscar" name="btnbuscar" value="Buscar">

            </div>
            <thead>
                <tr>
                    <th scope="col">numero de partes</th>
                    <th scope="col">ID de Marca</th>
                    <th scope="col">Marca</th>
                    <th scope="col">limite Inferior</th>
                    <th scope="col">limite Superior</th>
                    <th scope="col">Tipo de producto</th>
                    <th scope="col">ID Almacen</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Costo</th>
                    <th scope="col">Moneda</th>
                    <th scope="col">Ubicacion de Almacen</th>
                    <th scope="col">Fecha de ingreso</th>
                    <th scope="col">ID de Ubicacion</th>
                    <th scope="col">Sitio de Almacen</th>
                    <th scope="col">Ubicacion de posicion</th>
                </tr>
            </thead>
            <tbody id="tabla">
                <?php foreach ($datos as $dts) { ?>
                    <tr>
                        <td><?php echo $dts[1]  ?></td>
                        <td><?php echo $dts[2]  ?></td>
                        <td><?php echo $dts[3]  ?></td>
                        <td><?php echo $dts[4]  ?></td>
                        <td><?php echo $dts[5]  ?></td>
                        <td><?php echo $dts[6]  ?></td>
                        <td><?php echo $dts[7]  ?></td>
                        <td><?php echo $dts[8]  ?></td>
                        <td><?php echo $dts[9]  ?></td>
                        <td><?php echo $dts[10] ?></td>
                        <td><?php echo $dts[11] ?></td>
                        <td><?php echo $dts[12] ?></td>
                        <td><?php echo $dts[13] ?></td>
                        <td><?php echo $dts[14] ?></td>
                        <td><?php echo $dts[15] ?></td>
                        <td><?php echo $dts[16] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </form>


    <!-- Ventana MODAL -->
    <div class="modal fade" id="almacen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><img src="./img/logo.webp" alt=""></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <form action="./almacen.php" method="post" onsubmit="return validarFormularioAlmacen()">
                        <div class="container-modal">

                            <div class="Almacen">
                                <label class="texto-modal-label" for="">producto</label>
                                <select class="controls" class="texto" name="producto" id="producto">
                                    <option required value="">Seleccione ubicacion</option>
                                    <option value="<?php echo $producto ?>"><?php echo $producto; ?></option>
                                </select>
                                <br>

                                <label class="texto-modal-label" for="">cantidad</label>
                                <input name="cantidad" id="cantidad" class="texto-modal" type="number">
                                <br>
                                <label class="texto-modal-label" for="">costo</label>
                                <input name="costo" id="costo" class="texto-modal" type="number">
                                <br>
                            </div>
                            <div class="Almacen">

                                <label class="texto-modal-label" for="">Moneda</label>
                                <select name="moneda" id="moneda">
                                    <option value="MX">MX</option>
                                    <option value="USD">USD</option>
                                </select>
                                <br>
                                <label class="texto-modal-label" for="">ubicacion</label>
                                <select class="controls" required class="texto" name="ubicacion" id="ubicacion">
                                    <option required value="">Seleccione ubicacion</option>
                                    <option value="<?php echo $ubicacion ?>"><?php echo $ubicacion; ?></option>
                                </select>
                                <br>
                                <label class="texto-modal-label" for="">fecha de ingreso</label>
                                <input name="fecha_de_ingreso" id="fecha_de_ingreso" class="texto-modal" type="datetime-local" name="" id="">
                                <br>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" name="btn_almacen" value="Insertar" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal Productos -->

    <!-- Ventana MODAL -->
    <div class="modal fade" id="ProductoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><img src="./img/logo.webp" alt=""></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <form action="./almacen.php" method="post">
                        <div class="container-modal">

                            <div class="Almacen">
                                <label class="texto-modal-label" for="">número de partes</label>
                                <input name="num_partes" class="texto-modal" type="text">
                                <br>

                                <label class="texto-modal-label" for="">Descripcion</label>
                                <input name="descripcion" class="texto-modal" type="text">
                                <br>
                                <label class="texto-modal-label" for="">Marca</label>
                                <select class="controls" required class="texto" name="marca" id="marca">
                                    <option required value="">Seleccione marca</option>
                                    <option value="<?php echo $marca ?>"><?php echo $marca; ?></option>
                                </select> <br>
                            </div>
                            <div class="Almacen">

                                <label class="texto-modal-label" for="">limite Inferior</label>
                                <input name="limite_inferior" id="lim_inf" class="texto-modal" type="number">
                                <br>
                                <label class="texto-modal-label" for="">Limite Superior</label>
                                <input name="limite_superior" class="texto-modal" type="number">
                                <br>
                                <label class="texto-modal-label" for="">Tipo de Producto</label>
                                <input name="tipo_producto" class="texto-modal" type="number">
                                <br>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" value="Insertar" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>

</html>