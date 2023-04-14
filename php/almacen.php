<?php

require "./DB/conexion_bd.php";
$obj = new BD_PDO();


 // Busqueda de datos
 if (isset($_POST['btnbuscar'])) {
    $buscar = $_POST['buscar'];
    $datos = $obj->Ejecutar_Instruccion("SELECT * FROM lista_productos WHERE moneda LIKE '%$buscar%' OR producto LIKE '%$buscar%'");
} 
else {
    $datos = $obj->Ejecutar_Instruccion("SELECT * FROM lista_productos");
}



if (isset($_POST['btn_almacen'])) {
    $producto = $_POST['producto'];
    $cantidad = $_POST['cantidad'];
    $costo = $_POST['costo'];
    $moneda = $_POST['moneda'];
    $ubicacion = $_POST['ubicacion'];
    $fecha_de_ingreso = $_POST['fecha_de_ingreso'];
    $obj ->Ejecutar_Instruccion("INSERT INTO  almacen(producto, cantidad, costo, moneda, ubicacion, fecha_ingreso)
    VALUE('$producto','$cantidad','$costo','$moneda','$ubicacion','$fecha_de_ingreso')");
}

// else{
//     echo'<script>alert("Error en encotrar los datos")</script>';
//     // header('Location: ./almacen.php');
// }

// Concatenaciones a tablas
$ubicacion = $obj->listados("SELECT id, concat(almacen,'') AS almacen FROM ubicacion", "SELECT id FROM producto WHERE id");
$producto = $obj->listados("SELECT id, concat(num_part,'') AS num_part FROM producto", "SELECT id FROM almacen WHERE id");
$marca = $obj->listados("SELECT id, concat(marca,'') AS marca FROM marca", "SELECT id FROM producto WHERE id");

