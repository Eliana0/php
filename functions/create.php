<?php
$sentencia=$conexion->prepare("INSERT INTO $tabla_db ($values_db) 
    VALUES (null, $values_update)");
?>