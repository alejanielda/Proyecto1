<?php
     include "conexion.php";

     $id            = $_POST["ID"];
     $descripcion   = $_POST["DES"];
     $precio        = $_POST["PRE"];
     $marca         = $_POST["MAR"];
     $categoria     = $_POST["CAT"];
     $tienda        = $_POST["TIE"];

     $sql = "UPDATE productos SET ";
     $sql .= "dscPROD ='$descripcion', ";
     $sql .= "pcioPROD =$precio, ";
     $sql .= "idMARCA_PROD ='$marca', ";
     $sql .= "idCAT_PROD ='$categoria', ";
     $sql .= "idTIENDA_PROD ='$tienda' ";
     $sql .= "WHERE idPROD=$id ";
     

     mysql_query($sql,$conex);

     

     mysql_close($conex);

     header("Location: modprod.php");



?>

