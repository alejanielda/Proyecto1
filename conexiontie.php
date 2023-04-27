<?php
    include "conexion.php";
    
   
    $tienda       = $_POST["TIE"];
    
    
    $sql  = "INSERT INTO tienda ";
    $sql .= "(idTIENDA,nomTIENDA) ";
    $sql .= "VALUES ";
    $sql .= "(null,'$tienda') ";
    
    mysql_query($sql,$conex);
    
    mysql_close($conex);
    
    header("Location: addtie.php");
?>					