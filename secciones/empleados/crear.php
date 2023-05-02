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
                    <option selected>Select one</option>
                    <option value="">New Delhi</option>
                    <option value="">Istanbul</option>
                    <option value="">Jakarta</option>
                </select>
            </div>

            <div class="mb-3">
              <label for="fechaDeIngreso" class="form-label">Email</label>
              <input type="date" class="form-control" name="fechaDeIngreso" id="fechaDeIngreso" aria-describedby="Fecha de ingreso" placeholder="abc@mail.com">
            </div>

            <button type="submit" class="btn btn-primary">Agregar registro</button>
            <a href="/secciones/empleados/index.php" class="btn btn-primary">Cancelar</a>

        </form>
    </div>
    <div class="card-footer text-muted">

    </div>
</div>
<?php include("../../templates/footer.php"); ?>
