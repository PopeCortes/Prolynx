<?php
require "./DB/conexion_bd.php";
$obj = new BD_PDO();

if(isset($_POST['btnregistrar'])){
    $usuario = $_POST['usuario'];    
    $nombre = $_POST['nombre'];    
    $apellido = $_POST['apellido'];    
    $password = $_POST['password'];  
    $privilegio = $_POST['privilegio'];  
    
    $obj->Ejecutar_Instruccion("INSERT INTO admin(username, passcode, Nombre, Apellido, Privilegio) 
    VALUE('$usuario', '$password', '$nombre', '$apellido','$privilegio')");

header('Location: ./index2.php');
    
}

?>