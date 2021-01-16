<?php

$username = $_POST['username'];
$password = $_POST['password'];

if(($username=='admin')&&($password=='admin123')){
    echo("Bienvenido:" . $username);
}
else{
    $message = "Usuario o contraseña incorrectos";
echo "<script type='text/javascript'>alert('$message');</script>";
}       


?>