<?php

    if (isset($_COOKIE["estado"])) {

        setcookie("estado","activo",time()+1200);
    } else {
        header("Location: salir.php");
    }

    
?>