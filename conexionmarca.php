<?php
    include "conexion.php";
    
   
    $marca       = $_POST["MAR"];
    
    
    $sql  = "INSERT INTO marca ";
    $sql .= "(idMARCA,nomMARCA) ";
    $sql .= "VALUES ";
    $sql .= "(null,'$marca') ";
    
    mysql_query($sql,$conex);
    
    mysql_close($conex);
    
    header("Location: addmarca.php");
?>					