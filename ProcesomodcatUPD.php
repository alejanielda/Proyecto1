<?php
     include "conexion.php";

     $id                = $_POST["ID"];
     $categoria         = $_POST["CAT"];
     

     $sql = "UPDATE categoria SET ";
     $sql .= "nomCATEGORIAS ='$categoria', ";
     $sql .= "WHERE idCAT=$id ";

     

     mysql_query($sql,$conex);

     mysql_close($conex);

     header("Location: categorias.php");



?>
