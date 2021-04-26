<?php
include("db.php");
if (isset($_POST['save_pqrs'])){
    $identificacion= $_POST['identificacion'];
    $nombre= $_POST['nombre'];
    $correo= $_POST['correo'];
    $telefono= $_POST['telefono'];
    $tipo= $_POST['tipo'];
    $descripcion= $_POST['descripcion'];
    $fecha =date("Y-m-d H:i:s");
    

    $query = "INSERT INTO registro(id_usu, nom_usu, correo, telefono, tipo, mensaje,fecha_radicado) VALUES ('$identificacion', '$nombre', '$correo', '$telefono', '$tipo', '$descripcion','$fecha')";
    $resultado = mysqli_query($conn, $query);
    

    if(!$resultado){
        die("Query failed");
    }

    $consulta_radicado = "SELECT id_radicado FROM registro WHERE fecha_radicado='$fecha'";
    $radicado = mysqli_query($conn, $consulta_radicado);
    $row = mysqli_fetch_array($radicado);
    $mensaje =$row['id_radicado'];

    if(!$radicado){
        die("Query failed radicado");
    }
    
    
    $_SESSION['message'] = "Guarde su numero de radicado: ".$mensaje;
    $_SESSION['message_type'] = 'success';
    header("Location: registro.php");
}
//"'.$identificacion.'","'.$nombre.'","'.$correo.'","'.$telefono.'","'.$tipo.'","'.$descripcion.'"
?>