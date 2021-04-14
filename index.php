<?php include("db.php") ?>

<?php include("includes/header.php")?>
<div align="center"><img src="img/logotipo.png" alt="logotipo PQRS" width="400" height=""></div>
<div class="container">

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-2">
            <h4>Identificacion *</h4><br>
            <h4>Nombre *</h4><br>
            <h4>Correo *</h4><br>
            <h4>Telefono *</h4><br>
            <h4>Tipo *</h4><br>
            <h4>Mensaje *</h4>

        </div>
        <div class="col-md-4">
            <div> <!-- se quito esta clase para centrar el input class="card card-body"-->
                <form action="">
                    <div class="form-group">
                        <input type="text" name="identificacion" class="form-control" placeholder="Identificacion" autofocus>
                        <br>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre" >
                        <br>
                        <input type="text" name="correo" class="form-control" placeholder="Correo" >
                        <br>
                        <input type="text" name="telefono" class="form-control" placeholder="Telefono" >
                        <br>
                        <select name="tipo" class="form-select">
                            <option value="petición">Petición</option>
                            <option value="queja">Queja</option>
                            <option value="reclamo">Reclamo</option>
                            <option value="sugerencia">Sugerencia</option>
                        </select>
                        <br>
                        <textarea name="descripcion" id="" rows="2" class="form-control" placeholder="Descripción del mensaje"></textarea>
                        <br>
                    </div>
                    <input type="submit" class="d-grid gap-2 col-6 mx-auto btn btn-outline-success" name="registrar" value="Registrar">
                </form>
            </div>
        </div>
    </div>

</div>

<?php include("includes/footer.php")?>