<?php 

include("./conexion.php");


    $emailID=$_POST["EmailID"];
    $clave=$_POST["Clave"];
    $sql=$mysqli ->query(" select * from Registro where EmailID=$emailID and Clave=$clave ");

    if ($mysqli -> execute()) {
        echo '<div class="Success">Usuario logueado correctamente</div>';
        header("Location: FrontHome.php")
    } else {
        echo '<div class="alerta">No se ha logueado</div>';
    }


?>