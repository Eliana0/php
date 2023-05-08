
<?php 
include("../../db.php");
$tabla_db= "tbl_empleados";

$values_db= "id, nombre, apellido, foto, cv, idpuesto, fechadeingreso";
$values_update= ":nombre, :apellido, :foto, :cv, :idpuesto, :fechadeingreso";

if($_POST){
    $nombre=(isset($_POST["nombre"]) ? $_POST["nombre"]:"");
    $apellido=(isset($_POST["apellido"]) ? $_POST["apellido"]:"");
    $idpuesto=(isset($_POST["idpuesto"]) ? $_POST["idpuesto"]:"");
    $fechadeingreso=(isset($_POST["fechadeingreso"]) ? $_POST["fechadeingreso"]:"");
    
    include("../../functions/create.php");
    
    $sentencia->bindParam(":nombre",$nombre);
    $sentencia->bindParam(":apellido",$apellido);
    
    $fecha_= new DateTime();
    
    $foto=(isset($_FILES["foto"]['name'])?$_FILES["foto"]['name']:"");
    $nombreArchivo_foto=($foto!='')?$fecha_->getTimestamp()."_".$_FILES["foto"]["name"]:"";
    $tmp_foto=$_FILES["foto"]['tmp_name'];
    if($tmp_foto!=''){
        move_uploaded_file($tmp_foto,"./".$nombreArchivo_foto);
    }
    $sentencia->bindParam(":foto",$nombreArchivo_foto);
    
    $cv=(isset($_FILES["cv"]['name'])?$_FILES["cv"]['name']:"");
    $nombreArchivo_cv=($cv!='')?$fecha_->getTimestamp()."_".$_FILES["cv"]["name"]:"";
    $tmp_cv=$_FILES["cv"]['tmp_name'];
    if($tmp_cv!=''){
        move_uploaded_file($tmp_cv,"./".$nombreArchivo_cv);
    }
    $sentencia->bindParam(":cv",$nombreArchivo_cv);

    $sentencia->bindParam(":idpuesto",$idpuesto);
    $sentencia->bindParam(":fechadeingreso",$fechadeingreso);
    
    $sentencia->execute();

     header("Location:index.php");              
}
?>
<?php
//SELECT
include("../../functions/selectPuestos.php");
?>
<?php include("../../templates/header.php"); ?>
<br>
<div class="card">
    <div class="card-header">
       <h3>Datos del empleado</h3> 
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text"
                class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text"
                class="form-control" name="apellido" id="apellido" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file"
                class="form-control" name="foto" id="foto" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
            <label for="cv" class="form-label">CV(PDF)</label>
            <input type="file"
                class="form-control" name="cv" id="cv" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
                <label for="idpuesto" class="form-label">Puesto</label>
                <select class="form-select form-select-sm" name="idpuesto" id="idpuesto">
                    <?php foreach($lista_tbl_puestos as $registro) { ?>
                    <option value="<?php echo $registro['id'] ?>"><?php echo $registro['idpuesto'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
              <label for="fechadeingreso" class="form-label">Fecha de ingreso</label>
              <input type="date" class="form-control" name="fechadeingreso" id="fechadeingreso" aria-describedby="helpId" placeholder="Fecha de ingreso">
            </div>

            <button type="submit" class="btn btn-primary">Agregar registro</button>
            <a href="/secciones/empleados/index.php" class="btn btn-primary">Cancelar</a>

        </form>
    </div>
    <div class="card-footer text-muted">

    </div>
</div>
<?php include("../../templates/footer.php"); ?>
