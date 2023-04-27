<?php
     include "conexion.php";

     
     

     

     $tienda = $_POST["TIE"];

	        if ($tienda=="") {

	    	$sql = "SELECT * FROM tienda";

		    } else {

				$sql = "SELECT * FROM tienda WHERE nomTIENDA='$tienda'";
		    }
     

     mysql_query($sql,$conex);

     mysql_close($conex);

     header("Location: tienda.php");



?>