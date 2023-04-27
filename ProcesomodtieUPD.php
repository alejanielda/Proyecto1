<?php
     include "conexion.php";

     $id            = $_POST["ID"];
     $tienda        = $_POST["TIE"];

     $sql = "UPDATE productos SET ";
     $sql .= "nomTIENDA ='$tienda' ";
     $sql .= "WHERE idTIENDA=$id ";

     

     mysql_query($sql,$conex);

     mysql_close($conex);

     header("Location: tienda.php");
?>          