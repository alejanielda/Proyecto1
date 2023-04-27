<?php
    include "ctrlsession.php";
?>
<?php
    include "cookie.php";
    
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
		<a href="lstprod.php">Productos</a>
		<a href="modprod.php">Modificar Productos</a>
		<a href="delprod.php">Eliminar Productos</a>
		<a href="addmarca.php">Agregar Marca</a>
		<a href="lstmarca.php">Marcas</a>
		<a href="modmarcas.php">Modificar Marca</a>
		<a href="addtie.php">Agregar Tienda</a>
		<a href="lsttienda.php">Tienda</a>
		<a href="modtie.php">Modificar Tienda</a>
		<a href="addcat.php">Agregar Categoria</a>
		<a href="lstcat.php">Categorias</a>
		<a href="modcat.php">Modificar Categoria</a>
		<a href="salir.php">Salir</a>
	</div>
	

	<div id="tagre">
		
		<fieldset id="agprod">
		<br>
		
		<legend>Agregar</legend>
		<form id="dataFPR" action ="conexionmarca.php" method="POST">
			<table>
				
			
            <tr>
                <td>Marca:</td>
                <td>
                    <input id="dataMAR" name="MAR" >
                </td>
            
         <tr>
            <td colspan="2">
                <input type="button" value="Agregar" onclick="CheckMarca();"> 
                <input type="reset" value="Cancelar" >
			</td>
         </tr>
		
		</table>
	
	   </form>
    
	</fieldset>
 
</div>