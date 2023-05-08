<?php
    if(isset($registro[$name]) && $registro[$name]!=""){
        if(file_exists("./".$registro[$name])){
            unlink("./".$registro[$name]);
        }
    }
?>