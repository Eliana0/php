<?php 
include("../../db.php");
$tabla_db="tbl_usuarios";
$values_db="id, usuario, correo, password";
$values_update=":usuario, :email, :password";
//POST
if($_POST){
    $usuario=(isset($_POST["usuario"]) ? $_POST["usuario"]:"");
    $email=(isset($_POST["email"]) ? $_POST["email"]:"");
    $password=(isset($_POST["password"]) ? $_POST["password"]:"");
    include("../../functions/create.php");
    $sentencia->bindParam(":usuario",$usuario);
    $sentencia->bindParam(":email",$email);
    $sentencia->bindParam(":password",$password);

    $sentencia->execute();
    header("Location:index.php");              
}
?>
<?php include("../../templates/header.php"); ?>
<br>
<div class="card">
    <div class="card-header">
        Datos del usuario
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="usuario" class="form-label">Nombre del usuario</label>
              <input type="text"
                class="form-control" name="usuario" id="usuario" aria-describedby="helpId" placeholder="Escriba su nombre">
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email"
                class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Escriba su email">
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Contraseña</label>
              <input type="password"
                class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Escriba su contraseña">
            </div>

            <button type="submit" class="btn btn-primary">Agregar</button>
            <a href="/secciones/usuarios/index.php" class="btn btn-primary">Cancelar</a>
        </form>
    </div>
    <div class="card-footer text-muted">
    </div>
</div>
<?php include("../../templates/footer.php"); ?>
