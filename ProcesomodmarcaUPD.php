<?php
     include "conexion.php";

     $id            = $_POST["ID"];
     $marca         = $_POST["MAR"];
     

     $sql = "UPDATE marca SET ";
     $sql .= "nomMARCA ='$marca', ";
     $sql .= "WHERE idMARCA=$id ";

     

     mysql_query($sql,$conex);

     mysql_close($conex);

     header("Location: modmarcas.php");



?>
