<?php 
include("../../db.php");
//POST
if($_POST){
    print_r($_POST);
    $nombredelpuesto=(isset($_POST["nombredelpuesto"]) ? $_POST["nombredelpuesto"]:"");
                        //validamos que exista la información enviada, si existe, se asigna. Si no existe ""
    $sentencia=$conexion->prepare("INSERT INTO tbl_puestos(id, idpuesto) VALUES (null, :nombredelpuesto)");
    //null:id(porque es autoincremental en la db) nombredelpuesto:idpuesto(se agrega el dato con el nomber al espacio designado en la base de datos) prepara la inserción del dato
    $sentencia->bindParam(":nombredelpuesto",$nombredelpuesto);
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
              <label for="nombredelpuesto" class="form-label">Nombre del puesto</label>
              <input type="text"
                class="form-control" name="nombredelpuesto" id="nombredelpuesto" aria-describedby="helpId" placeholder="Nombre del puesto">
            </div>

            <button type="submit" class="btn btn-primary">Agregar</button>
            <a href="/secciones/puestos/index.php" class="btn btn-primary">Cancelar</a>
        </form>
    </div>
    <div class="card-footer text-muted">
    </div>
</div>
<?php include("../../templates/footer.php"); ?>
