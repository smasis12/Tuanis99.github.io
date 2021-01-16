<?php

$username = $_GET['username'];
$password = $_GET['password'];

if(($username=='admin')&&($password=='admin123')){
    echo("Bienvenido:" . $username);
}
else{
    $message = "ERROR, Usuario o contraseña incorrectos";
echo "<script type='text/javascript'>alert('$message');</script>";
}       


?>