<?php
    include "conexion.php";
    
    $descripcion   = $_POST["DES"];
    $precio        = $_POST["PRE"];
    $marca         = $_POST["MAR"];
    $categoria     = $_POST["CAT"];
    $tienda        = $_POST["TIE"];
    
    $sql  = "INSERT INTO productos "; 
    $sql .= "(idPROD,dscPROD,pcioPROD,idMARCA_PROD,idCAT_PROD,idTIENDA_PROD) ";
    $sql .= "VALUES ";
    $sql .= "(null,'$descripcion','$precio','$marca','$categoria','$tienda') ";
    
    mysql_query($sql,$conex);
    
    mysql_close($conex);
    
    header("Location: addprod.php");
?>					