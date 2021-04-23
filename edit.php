<?php 
    include("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM registro WHERE id_radicado = $id";
        $resultado = mysqli_query($conn,$query);

        if(mysqli_num_rows($resultado)==1){
            $row = mysqli_fetch_array($resultado);
            
            $identificacion = $row['id_usu'];
            $nombre = $row['nom_usu'];
            $correo = $row['correo'];
            $telefono = $row['telefono'];
            $tipo = $row['tipo'];
            $mensaje = $row['mensaje'];
            $respuesta = $row['respuesta'];

            
        }

    }

    if(isset($_POST['responder'])){
        $id = $_GET['id'];
        $respuesta = $_POST['respuesta'];
        $fecha_respuesta =date("Y-m-d H:i:s");
        $estado=2;

        $query = "UPDATE registro set respuesta='$respuesta',fecha_respuesta='$fecha_respuesta',estado='$estado' WHERE id_radicado = $id";
        mysqli_query($conn, $query);
        $_SESSION['message'] = "PQRS RESUELTO CON ID".$id;
        $_SESSION['message_type'] = 'warning';
        header("Location: admin.php");
    }

?>
<?php include("includes/header.php") ?>
<div align="center"><img src="img/logotipo.png" alt="logotipo PQRS" width="200" height=""></div>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                    <form action="edit.php?id=<?php echo $_GET['id'] ?>" method="POST">
                        <div class="form-group">
                            <input type="text" name="identificacion" value="<?php echo $identificacion; ?>" class="form-control" placeholder="ide" disabled>
                            <br>
                            <input type="text" name="nombre" value="<?php echo $nombre; ?>" class="form-control" placeholder="nombre" disabled>
                            <br>
                            <input type="text" name="correo" value="<?php echo $correo; ?>" class="form-control" placeholder="correo" disabled>
                            <br>
                            <input type="text" name="telefono" value="<?php echo $telefono; ?>" class="form-control" placeholder="telefono" disabled>
                            <br>
                            <input type="text" name="tipo" value="<?php echo $tipo; ?>" class="form-control" placeholder="Tipo" disabled>
                            <br>
                            <textarea name="mensaje" rows="2" class="form-control" placeholder="mensaje" disabled> <?php echo $mensaje; ?> </textarea>
                            <br>
                            <br>
                            <textarea name="respuesta" rows="2" class="form-control" placeholder="Respuesta"> <?php echo $respuesta; ?> </textarea>
                            <br>
                        </div>
                            <button class="btn btn-success" name="responder">
                                Responder
                            </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include("includes/footer.php") ?>