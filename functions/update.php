<?php
 $sentencia=$conexion->prepare("UPDATE $tabla_db SET $values_update WHERE id=:id");
 ?>