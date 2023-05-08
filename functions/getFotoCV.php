<?php
    if(isset($registro_recuperado[$name]) && $registro_recuperado[$name]!=""){
        if(file_exists("./".$registro_recuperado[$name])){
            unlink("./".$registro_recuperado[$name]);
        }
    }
?>