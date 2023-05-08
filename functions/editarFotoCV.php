<?php

    if($tmp_file!=''){
        move_uploaded_file($tmp_file,"./".$nombreArchivo);
        $txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
        $txtD= (isset($_GET['txtID']))?$_GET['txtID']:"";
        
        $sentencia= $conexion->prepare("SELECT $name FROM `tbl_empleados` WHERE id=:id");
        $sentencia->bindParam(":id", $txtD);
        $sentencia->execute();
        $registro_recuperado=$sentencia->fetch(PDO::FETCH_LAZY);
        if(isset($registro_recuperado["$name"]) && $registro_recuperado["$name"]!=""){
            if(file_exists("./".$registro_recuperado["$name"])){
                unlink("./".$registro_recuperado["$name"]);
            }
        }

        $sentencia=$conexion->prepare("UPDATE tbl_empleados SET $name=:$name WHERE id=:id");
        $sentencia->bindParam(":$name",$nombreArchivo);
        $sentencia->bindParam(":id",$txtID);
        $sentencia->bindParam(":id",$txtD);
        $sentencia->execute();
    }
?>