<?php
    include "conexion.php";

       $sql= "SELECT * FROM marca";

       $result = mysql_query($sql,$conex);

       while ($regMARCA = mysql_fetch_array($result)) {

        $id          = $regMARCA["idMARCA"];
        $marca       = $regMARCA["nomMARCA"];

        
        
        echo "<option value='$id' selected>$marca</option> \n";
        



       }

       mysql_close($conex); 

    
?>