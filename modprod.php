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
		
		<legend>Modificar</legend>
		<form id="dataFPR" action ="Procesomodprod.php" method="POST">
			<table>
			<tr>
                <td>ID:</td>
                <td>
                    <input id="dataID" type="text" name="ID" >
                </td>
            </tr>	
			<tr>
                <td>Descripcíon:</td>
                <td>
                    <input id="dataDES" type="text" name="DES" >
                </td>
            </tr>
            <tr>
                <td>Precio:</td>
                <td>
                    <input id="dataPRE" type="text" name="PRE" >
                </td>
            </tr>
            <tr>
                <td>Marca:</td>
                <td> 
					
                    <select id="dataMAR" name="MAR"  />
                    <option value ="0">-- Todas las Marcas--</option> 
                              <?php
									include "combomarca.php";
							  ?>
                    </select>        
                </td>
            </tr>

            <tr>
                <td>Categoría:</td>
                <td> 
					
                    <select id="dataCAT" name="CAT"  />
                    <option value ="0">-- Todas las Marcas--</option> 
                              <?php
									include "combomarca.php";
							  ?>
                    </select>        
                </td>
            </tr>


            <tr>
                <td>Tienda:</td>
                <td> 
					
                    <select id="dataTIE" name="TIE"  />
                    <option value ="0">-- Todas las Marcas--</option> 
                              <?php
									include "combomarca.php";
							  ?>
                    </select>        
                </td>
            </tr>
         <tr>
            <td colspan="2">
                <input type="button" value="Confirmar" onclick="CheckID();"> 
                <input type="reset" value="Cancelar" >
			</td>
         </tr>
		
		</table>
	
	   </form>
    
	</fieldset>
 
</div>
