<?php include("db.php") ?>

<?php include("includes/header.php")?>
<div align="center"><img src="img/logotipo.png" alt="logotipo PQRS" width="200" height=""></div>

<div class="container">

    <div class="row">
    <?php if(isset($_SESSION['message'])) { ?>
                    <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                        <?=$_SESSION['message'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php session_unset(); } ?>
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>N° Radicado</th>
                        <th>Identificación</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Tipo PQRS</th>
                        <th width="180">Mensaje</th>
                        <th>Fecha de Radicado</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                        $query = "SELECT * FROM registro";
                        $resultado_registros=mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($resultado_registros)) { ?>
                            <tr>
                                <td><?php echo $row['id_radicado'] ?></td>
                                <td><?php echo $row['id_usu'] ?></td>
                                <td><?php echo $row['nom_usu'] ?></td>
                                <td><?php echo $row['correo'] ?></td>
                                <td><?php echo $row['telefono'] ?></td>
                                <td><?php echo $row['tipo'] ?></td>
                                <td><?php echo $row['mensaje'] ?></td>
                                <td><?php echo $row['fecha_radicado'] ?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $row['id_radicado'] ?>" class="btn btn-outline-info">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <a href="delete.php?id=<?php echo $row['id_radicado'] ?>" class="btn btn-outline-danger">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>

</div>

<?php include("includes/footer.php")?>
