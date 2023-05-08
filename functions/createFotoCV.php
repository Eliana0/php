<?php
    $nombreArchivo=($archivo!='')?$fecha_->getTimestamp()."_".$_FILES[$name]["name"]:"";
    $tmp=$_FILES[$name]['tmp_name'];
    if($tmp!=''){
        move_uploaded_file($tmp,"./".$nombreArchivo);
    }
    $sentencia->bindParam(":$name",$nombreArchivo);
?>