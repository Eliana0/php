<?php 
include("../../db.php");
//DELETE
$tabla_db= "tbl_puestos";
if(isset($_GET['txtID'])){
    $txtID=(isset($_GET['txtID']))?$_GET['txtID']:"";
    include("../../functions/delete.php");
}
//SELECT
include("../../functions/selectPuestos.php");
?>
<?php include("../../templates/header.php"); ?>
<br>

<div class="card">
    <div class="card-header">
        <a href="crear.php" class="btn btn-primary" role="button" name="" id="">Agregar registro</a>
    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre del puesto</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- CREACIÓN -->
                    <?php foreach($lista_tbl_puestos as $registro) {?>
                        <tr class="">
                           <td scope="row"><?php echo $registro['id'] ?></td>
                           <td><?php echo $registro['idpuesto'] ?></td>
                           <td>
                           <a name="" id="" class="btn btn-primary" href="editar.php?txtID=<?php echo $registro['id'] ?>" role="button">Editar</a>
                           <a name="" id="" class="btn btn-primary" href="index.php?txtID=<?php echo $registro['id'] ?>" role="button">Eliminar</a>
                       </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php include("../../templates/footer.php"); ?>
