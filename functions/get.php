<?php
    $txtID= (isset($_GET['txtID']))?$_GET['txtID']:"";
    $sentencia=$conexion->prepare ("SELECT * FROM $tabla_db WHERE id=:id");
    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();
    $registro=$sentencia->fetch(PDO::FETCH_LAZY);
?>