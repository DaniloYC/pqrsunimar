<?php
include("db.php");
if (isset($_POST['save_pqrs'])){
    $identificacion= $_POST['identificacion'];
    $nombre= $_POST['nombre'];
    $correo= $_POST['correo'];
    $telefono= $_POST['telefono'];
    $tipo= $_POST['tipo'];
    $descripcion= $_POST['descripcion'];
    

    $query = "INSERT INTO registro(id_usu, nom_usu, correo, telefono, tipo, mensaje) VALUES ('$identificacion', '$nombre', '$correo', '$telefono', '$tipo', '$descripcion')";
    $resultado = mysqli_query($conn, $query);
    

    if(!$resultado){
        die("Query failed");
    }

    $consulta_radicado = "SELECT id_radicado FROM registro WHERE id_usu =$identificacion";
    $radicado = mysqli_query($conn, $consulta_radicado);
    if(!$radicado){
        die("Query failed radicado");
    }
    
    $_SESSION['message'] = "el radicado es: ";
    $_SESSION['message_type'] = 'success';
    header("Location: index.php");
}
//"'.$identificacion.'","'.$nombre.'","'.$correo.'","'.$telefono.'","'.$tipo.'","'.$descripcion.'"
?>