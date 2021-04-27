<?php
require '../db.php';
//session_start();

$usuario=$_POST['usuario'];
$contraseña= md5($_POST['contraseña']);


$query ="SELECT count(*) as contar FROM admin WHERE usuario='$usuario' and password='$contraseña'";
$consulta = mysqli_query($conn, $query);

$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    $_SESSION['username'] =$usuario;
    header("Location: ../admin.php ");
}
else{
    echo "DATOS INCORRECTOS";
}




?>