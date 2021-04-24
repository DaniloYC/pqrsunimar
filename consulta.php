<?php include("includes/header.php") ?>
<?php include("db.php") ?>
<div align="center"><img src="img/logotipo.png" alt="logotipo PQRS" width="400" height=""></div>

<div class="container">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <form action="consulta.php" method="POST">
                <div class="form-group">
                    <input type="text" name="radicado" class="form-control" placeholder="N° Radicado" maxlength="10" required="required" autofocus>
                    <br>
                </div>
                    <input type="submit" class="d-grid gap-2 col-6 mx-auto btn btn-outline-success" name="consultar" value="Consultar">
                    <br>
                    <div class="col-md-2 mx-auto"><a href="inicio.html" class="btn btn-danger">Inicio</a></div>
                    <br>
            </form>
        </div>
    </div>
</div>
<div class="col-md-8 mx-auto">
            <table class="table table-bordered">
                <?php
                    

                        if(isset($_POST['consultar'])){
                            $radicado= $_POST['radicado'];
                    
                           $query = "SELECT * FROM registro WHERE id_radicado=$radicado";
                           $consulta = mysqli_query($conn, $query);
                           
                           while($row = mysqli_fetch_array($consulta)) { ?>
                           <thead>
                                <tr>
                                    <th>N° Radicado</th>
                                    <th>Identificación</th>
                                    <th>Nombre</th>
                                    <th>Tipo PQRS</th>
                                    <th>Mensaje</th>
                                    <th width="180">Fecha de Radicado</th>
                                    <th >Respuesta</th>
                                    <th >Fecha Respuesta</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><?php echo $row['id_radicado'] ?></td>
                                <td><?php echo $row['id_usu'] ?></td>
                                <td><?php echo $row['nom_usu'] ?></td>
                                <td><?php echo $row['tipo'] ?></td>
                                <td><?php echo $row['mensaje'] ?></td>
                                <td><?php echo $row['fecha_radicado'] ?></td>
                                <td><?php echo $row['respuesta'] ?></td>
                                <td><?php echo $row['fecha_respuesta'] ?></td>
                            </tr>
                    <?php } } ?>
                </tbody>
            </table>
        </div>


<?php include("includes/footer.php") ?>