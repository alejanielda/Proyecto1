<?php
    include "conexion.php";

       $sql= "SELECT * FROM categoria";

       $result = mysql_query($sql,$conex);

       while ($regCat = mysql_fetch_array($result)) {

        $id          = $regCat["idCAT"];
        $categoria       = $regCat["nomCATEGORIAS"];

        
        
        echo "<option value='$id' selected>$categoria</option> \n";
        



       }

       mysql_close($conex); 

    
?>