<?php
require "./DB/conexion_bd.php";
$obj = new BD_PDO();

if(isset($_POST['btnentrar']))
{
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $datos = $obj->Ejecutar_Instruccion("SELECT * FROM admin WHERE username='$usuario' and passcode='$password'");

    if (@$datos [0][0] > 0)
    {
        $_SESSION['id'] = $datos[0][0];
        $_SESSION['username'] = $datos[0][1];
        $_SESSION['Privilegio'] = $datos[0][5];
        $_SESSION['Nombre'] = $datos[0][3];
        $_SESSION['Apellido'] = $datos[0][4];

        echo 
        "<script>
            alert('Bienvenido ".$_SESSION['Nombre']." ".$_SESSION['Apellido']."');
            window.location = 'index2.php'
            
        </script>";     
    }
}
?>