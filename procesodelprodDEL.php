<?php
     include "conexion.php";

     $id            = $_POST["ID"];
     

     $sql = "DELETE FROM productos WHERE idPROD=$id ";
     

     

     mysql_query($sql,$conex);

     mysql_close($conex);

     header("Location: productos.php");



?>
