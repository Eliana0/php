<?php 
include ("../../db.php");
$tabla_db="tbl_usuarios";
$values_update="usuario=:usuario, password=:password, correo=:email";
if(isset($_GET['txtID'])){
    $usuario= (isset($_GET['usuario']))?$_GET['usuario']:"";
    include("../../functions/get.php");

    $usuario=$registro["usuario"];
    $email=$registro["correo"];
    $password=$registro["password"];
}
//POST
if($_POST){
    $txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
    $txtD= (isset($_GET['txtID']))?$_GET['txtID']:"";
    $usuario=(isset($_POST["usuario"]) ? $_POST["usuario"]:"");
    $password=(isset($_POST["password"]) ? $_POST["password"]:"");
    $email=(isset($_POST["email"]) ? $_POST["email"]:"");

    include("../../functions/update.php");

    $sentencia->bindParam(":usuario",$usuario);
    $sentencia->bindParam(":password",$password);
    $sentencia->bindParam(":email",$email);
    $sentencia->bindParam(":id",$txtD);
    $sentencia->execute();

    header("Location:index.php");             
}
?>
<?php include("../../templates/header.php"); ?>
<div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="" class="form-label">ID</label>
              <input type="text" value="<?php echo $txtID; ?>" class="form-control" readonly name="" id="txtID" aria-describedby="helpId" placeholder="Número de ID">            
            </div>
            <div class="mb-3">
              <label for="usuario" class="form-label">Nombre del usuario</label>
              <input type="text" value="<?php echo $usuario; ?>" class="form-control" name="usuario" id="usuario" aria-describedby="helpId" placeholder="Nombre del usuario">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" value="<?php echo $password; ?>" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="password">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" value="<?php echo $email; ?>" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="email">
            </div>

            <button type="submit" class="btn btn-primary">Agregar</button>
            <a href="/secciones/usuarios/index.php" class="btn btn-primary">Cancelar</a>
        </form>
    </div>
<?php include("../../templates/footer.php"); ?>
