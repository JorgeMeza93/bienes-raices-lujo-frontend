<?php 

    function conectarDB() : mysqli{    #esa notación indica que conectarDB devolverá un valor de tipo mysqli
        $db = mysqli_connect("localhost", "root", "rootroot", "bienes_raices_php_crud");
        if(!$db){
            echo "Ha ocurrido un error al conectar a la base de datos";
            exit();
        }
        return $db;
    }
?>