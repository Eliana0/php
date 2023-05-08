<?php
    $sentencia=$conexion->prepare("DELETE FROM $tabla_db WHERE id=:id");
    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();
    header("Location:index.php");
?>