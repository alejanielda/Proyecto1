<?php
    include "ctrlsession.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tienda Web</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<script type="text/javascript" src="funcionesingprod.js"></script>
</head>
<body>

	<div id="head">
		<h1>T.Web</h1>
	</div>
	
	<div id="menu">
        <a href="index.php">Inicio</a>
		<a href="usuarioslog.php">Usuarios/Registrar</a>
		<a href="addprod.php">Agregar Producto</a>
		<a href="productos.php">Productos</a>
		<a href="modprod.php">Modificar Productos</a>
		<a href="delprod.php">Eliminar Productos</a>
		<a href="addmarca.php">Agregar Marca</a>
		<a href="marcas.php">Marcas</a>
		<a href="modmarcas.php">Modificar Marca</a>
		<a href="addtie.php">Agregar Tienda</a>
		<a href="tienda.php">Tienda</a>
		<a href="modtie.php">Modificar Tienda</a>
		<a href="addcat.php">Agregar Categoria</a>
		<a href="categorias.php">Categorias</a>
		<a href="modcat.php">Modificar Categoria</a>
		<a href="salir.php">Salir</a>
	<br></div>
	

	<div id="tagre">
		
		<fieldset id="agprod">
		<br>
		
		<legend>Listar</legend>
		<form id="dataFPR" action ="productos.php" method="POST">
			<table>
				
			<tr>
                <td>Descripcíon:</td>
                <td>
                    <input id="dataDES" type="text" name="DSC" >
                </td>
            </tr>
            
         <tr>
            <td colspan="2">
                <input type="submit" value="Listar "> 
                <input type="reset" value="Cancelar" >
			</td>
         </tr>
		
		</table>
	
	   </form>
    
	</fieldset>
 
</div>