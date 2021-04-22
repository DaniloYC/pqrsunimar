<?php

    include("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM registro WHERE id_radicado = $id";
        $resuldado = mysqli_query($conn, $query);

        if(!$resuldado){
            die("FALLO AL ELIMINAR");
        }

        $_SESSION['message']='REGISTRO ELIMINADO CORRECTAMENTE';
        $_SESSION['message_type'] = 'danger';
        header("Location: admin.php");
    }

?>