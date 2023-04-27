<<?php
    include "conexion.php";
  
    
   
    $usuario       = utf8_decode($_POST["USU"]);
    $password       =  md5($_POST["CON"]);
    
    $sql = "SELECT * FROM usuarios WHERE usNAME='$usuario' and paswNAME='$password' ";

    $result = mysql_query($sql,$conex);

    if(mysql_num_rows($result)==0) {

		mysql_close($conex);
    
        header("Location: errorPage.php?MSG=el usuario y contraseña incorrectos");

   
    	} else {

			session_start();

			$_SESSION["nombreUSU"]=$usuario;

            setcookie("estado","activo",time()+1200);

			header("Location: bienvenida.php");	
	}

    
    
    
    
    
?>					