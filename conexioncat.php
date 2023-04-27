<?php
    include "conexion.php";
    
   
    $categoria       = $_POST["CAT"];
    
    
    $sql  = "INSERT INTO categoria ";
    $sql .= "(idCAT,nomCATEGORIAS) ";
    $sql .= "VALUES ";
    $sql .= "(null,'$categoria') ";
    
    mysql_query($sql,$conex);
    
    mysql_close($conex);
    
    header("Location: addcat.php");
?>					