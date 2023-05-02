<?php include("../../templates/header.php"); ?>
<br>
<div class="card">
    <div class="card-header">
        <a href="crear.php" class="btn btn-primary" role="button" name="" id="">Agregar usuario</a>
    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre del usuario</th>
                        <th scope="col">Contraseña</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">1</td>
                        <td>Oscar Uh</td>
                        <td>****</td>
                        <td>oscar@mail.com</td>
                        <td><input type="button" name="btneditar" id="btneditar" class="" value="Editar">
                        <input type="button" name="bteliminar" id="bteliminar" class="" value="Eliminar"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include("../../templates/footer.php"); ?>
