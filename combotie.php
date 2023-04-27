<?php
    include "conexion.php";

       $sql= "SELECT * FROM tienda";

       $result = mysql_query($sql,$conex);

       while ($regTienda = mysql_fetch_array($result)) {

        $id          = $regTienda["idTIENDA"];
        $tienda       = $regTienda["nomTIENDA"];

        
        
        echo "<option value='$id' selected>$tienda</option> \n";
        



       }

       mysql_close($conex); 

    
?>