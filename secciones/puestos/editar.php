<?php 
include("../../db.php");
if(isset($_GET['txtID'])){
    $txtID=(isset($_GET['txtID']))?$_GET['txtID']:"";
    //validamos que exista la información enviada, si existe, se asigna. Si no existe ""
    $sentencia=$conexion->prepare("SELECT * FROM tbl_puestos WHERE id=:id");
    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();
    //se selecciona el dato para ver qué tiene ese registro
    $registro=$sentencia->fetch(PDO::FETCH_LAZY);
    //FETCH_LAZY para que sólo se cargue ene el registro
    $nombredelpuesto=$registro["idpuesto"];
}
//POST
if($_POST){
    $txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
    $nombredelpuesto=(isset($_POST["nombredelpuesto"]) ? $_POST["nombredelpuesto"]:"");
                        //validamos que exista la información enviada, si existe, se asigna. Si no existe ""
    $sentencia=$conexion->prepare("UPDATE tbl_puestos SET idpuesto=:nombredelpuesto WHERE id=:id");
    //null:id(porque es autoincremental en la db) nombredelpuesto:idpuesto(se agrega el dato con el nomber al espacio designado en la base de datos) prepara la inserción del dato
    $sentencia->bindParam(":nombredelpuesto",$nombredelpuesto);
    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();
    //  bindParam escribe en la sentencia y ejecuta / se asigna los valores que vienen del método POST 
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
