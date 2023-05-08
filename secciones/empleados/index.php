<?php 
include("../../db.php");
$tabla_db="tbl_empleados";
if(isset($_GET['txtID'])){
    include("../../functions/get.php");
    $name="foto";
    include("../../functions/deleteFotoCV.php");
    $name="cv";
    include("../../functions/deleteFotoCV.php");

    //DELETE
    include("../../functions/delete.php");
}

$sentencia= $conexion->prepare("SELECT *,
(SELECT idpuesto FROM tbl_puestos 
WHERE tbl_puestos.id=tbl_empleados.idpuesto limit 1) as puesto 
FROM $tabla_db");
$sentencia->execute();
$lista_tbl_empleados=$sentencia->fetchAll(PDO::FETCH_ASSOC);
?>
<?php include("../../templates/header.php"); ?>
<br>

<h3>Empleados</h3> 
<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar registro</a>
    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Foto</th>
                        <th scope="col">CV</th>
                        <th scope="col">Puesto</th>
                        <th scope="col">Fecha de ingreso</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($lista_tbl_empleados as $registro) { ?>
                    <tr class="">
                        <td><?php echo $registro['id']; ?></td>
                        <td><?php echo $registro['nombre']; ?> <?php echo $registro['apellido']; ?></td>
                        <td scope="row"><img width="50" src="<?php echo $registro['foto']; ?>" alt=""></td>
                        <td><a href="<?php echo $registro['cv']; ?>"><?php echo $registro['cv']; ?></a></td>
                        <td><?php echo $registro['puesto']; ?></td>
                        <td><?php echo $registro['fechadeingreso']; ?></td>
                        <td><a name="" id="" class="btn btn-primary" href="editar.php?txtID=<?php echo $registro['id'] ?>" role="button">Editar</a>
                            <a name="" id="" class="btn btn-primary" href="index.php?txtID=<?php echo $registro['id'] ?>" role="button">Eliminar</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        
    </div>
</div>

<?php include("../../templates/footer.php"); ?>
