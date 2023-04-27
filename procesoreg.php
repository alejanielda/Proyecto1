<?php
    include "conexion.php";
    
   
    $usuario        = utf8_decode($_POST["USU"]);
    $password       =  md5($_POST["CON"]);
    
    $sql = "SELECT * FROM usuarios WHERE usNAME='$usuario' ";

    $result = mysql_query($sql,$conex);

    if(mysql_num_rows($result)==0) {
    
    $sql  = "INSERT INTO usuarios ";
    $sql .= "(usNAME,paswNAME) ";
    $sql .= "VALUES ";
    $sql .= "('$usuario','$password') ";

    mysql_query($sql,$conex);
        
    mysql_close($conex);
    
    header("Location: usuarioslog.php");

    } else {

        mysql_close($conex);
    
        header("Location: errorPage.php?MSG=el usuario ya existe");

    }

    
    
    
    
    
?>					