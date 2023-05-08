<?php 
include ("../../db.php");
$tabla_db="tbl_puestos";
$values_update="idpuesto=:nombredelpuesto";
if(isset($_GET['txtID'])){
    include("../../functions/get.php");
    $nombredelpuesto=$registro["idpuesto"];
}
//POST
if($_POST){
    $txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
    $txtD= (isset($_GET['txtID']))?$_GET['txtID']:"";
    $nombredelpuesto=(isset($_POST["nombredelpuesto"]) ? $_POST["nombredelpuesto"]:"");
    include("../../functions/update.php");
    $sentencia->bindParam(":nombredelpuesto",$nombredelpuesto);
    $sentencia->bindParam(":id",$txtD);
    $sentencia->execute();
    header("Location:index.php");             
}
?>

<?php include("../../templates/header.php"); ?>
<br>
<div class="card">
    <div class="card-header">
        Puestos
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="" class="form-label">ID</label>
              <input type="text" value="<?php echo $txtID; ?>" class="form-control" readonly name="" id="txtID" aria-describedby="helpId" placeholder="Número de ID">            
            </div>

            <div class="mb-3">
              <label for="nombredelpuesto" class="form-label">Nombre del puesto</label>
              <input type="text" value="<?php echo $nombredelpuesto; ?>" class="form-control" name="nombredelpuesto" id="nombredelpuesto" aria-describedby="helpId" placeholder="Nombre del puesto">
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="/secciones/puestos/index.php" class="btn btn-primary">Cancelar</a>
        </form>
    </div>
    <div class="card-footer text-muted">
    </div>
</div>
<?php include("../../templates/footer.php"); ?>
