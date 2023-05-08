<?php 
include("../../db.php");

$tabla_db="tbl_empleados";
$values_update= "nombre=:nombre, apellido=:apellido, idpuesto=:idpuesto, fechadeingreso=:fechadeingreso";


if(isset($_GET['txtID'])){
    include("../../functions/get.php");

    $nombre=$registro["nombre"];
    $apellido=$registro["apellido"];
    $foto=$registro["foto"];
    $cv=$registro["cv"];
    $idpuesto=$registro["idpuesto"];
    $fechadeingreso=$registro["fechadeingreso"];

    //SELECT
    include("../../functions/selectPuestos.php");
}
if($_POST){
    $txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
    $txtD= (isset($_GET['txtID']))?$_GET['txtID']:"";
    $nombre=(isset($_POST["nombre"]) ? $_POST["nombre"]:"");
    $apellido=(isset($_POST["apellido"]) ? $_POST["apellido"]:"");
    $idpuesto=(isset($_POST["idpuesto"]) ? $_POST["idpuesto"]:"");
    $fechadeingreso=(isset($_POST["fechadeingreso"]) ? $_POST["fechadeingreso"]:"");
    
    include("../../functions/update.php");

    $sentencia->bindParam(":id",$txtID);
    $sentencia->bindParam(":id",$txtD);
    $sentencia->bindParam(":nombre",$nombre);
    $sentencia->bindParam(":apellido",$apellido);
    $sentencia->bindParam(":idpuesto",$idpuesto);
    $sentencia->bindParam(":fechadeingreso",$fechadeingreso);

    $sentencia->execute();

    $fecha_= new DateTime();
    
    //FOTO

    $foto=(isset($_FILES["foto"]['name']) ? $_FILES["foto"]['name']:"");
    $nombreArchivo=($foto!='')?$fecha_->getTimestamp()."_".$_FILES["foto"]["name"]:"";
    $tmp_file=$_FILES["foto"]['tmp_name'];
    $name="foto";
    
    include("../../functions/editarFotoCV.php");

    //CV

    $cv=(isset($_FILES["cv"]['name']) ? $_FILES["cv"]['name']:"");
    $nombreArchivo=($cv!='')?$fecha_->getTimestamp()."_".$_FILES["cv"]["name"]:"";
    $tmp_file=$_FILES["cv"]['tmp_name'];
    $name="cv";

    include("../../functions/editarFotoCV.php");

    header("Location:index.php");        
}
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
              <label for="" class="form-label">ID</label>
              <input type="text" value="<?php echo $txtID; ?>" class="form-control" readonly name="" id="txtID" aria-describedby="helpId" placeholder="Número de ID">            
            </div>
        
            <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" value="<?php echo $nombre; ?>"
                class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" value="<?php echo $apellido; ?>"
                class="form-control" name="apellido" id="apellido" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
            <label for="foto" class="form-label">Foto</label><br>
            <img width="150" src="<?php echo $foto; ?>" alt=""><br>
            <input type="file" 
                class="form-control" name="foto" id="foto" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
            <label for="cv" class="form-label">CV(PDF)</label>
            <a href="<?php echo $cv; ?>"><?php echo $cv; ?></a>
            <input type="file" 
                class="form-control" name="cv" id="cv" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
                <label for="idpuesto" class="form-label">Puesto</label>
                <select class="form-select form-select-sm" name="idpuesto" id="idpuesto">
                    <?php foreach($lista_tbl_puestos as $registro) { ?>
                    <option <?php echo ($idpuesto==$registro['id'])? "selected":""; ?> value="<?php echo $registro['id'] ?>"><?php echo $registro['idpuesto'] ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
              <label for="fechadeingreso" class="form-label">Fecha de ingreso</label>
              <input value="<?php echo $fechadeingreso; ?>"
              class="form-control" name="fechadeingreso" id="fechadeingreso" aria-describedby="helpId" placeholder="Fecha de ingreso">
            </div>

            <button type="submit" class="btn btn-primary">Agregar registro</button>
            <a href="/secciones/empleados/index.php" class="btn btn-primary">Cancelar</a>

        </form>
    </div>
    <div class="card-footer text-muted">

    </div>
</div>
<?php include("../../templates/footer.php"); ?>
