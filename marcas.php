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
	

	<div id="contenido">
		<fieldset id="tabprod">
			
			<br><legend>Marcas</legend>
			<table id="lst">
				<tr>
					<th>Id</th>
					<th>Marca</th>
					<th>Modificar</th>
					
				</tr>
				<?php

					include "conexion.php"; 

					
				

					$sql = "SELECT * FROM marca";

						


					$result = mysql_query($sql,$conex);

					
					
					$fila=1;

					while ($regMARCA = mysql_fetch_array($result)) {

						$id          = $regMARCA["idMARCA"];
						$marca       = $regMARCA["nomMARCA"];
						

						$resto = $fila%2;
						if ($resto==0) {
							echo "<tr class='filaPAR'>\n";
						} else {
							echo "<tr class='filaIMP'>\n";
						}	

						echo "
						
							<td>$id</td>
							<td>$marca</td>

							<td style='text-align:center;'>
								<a href='Procesomodmarcas.php?ID=$id'>
									<img class='ico' src='images/edit.svg'/>
								</a>	
							</td>
							
						</tr>		
						";

						$fila++;
					}
					mysql_close($conex);
					?>		
					</table>
		</fieldset>
	</div>

</body>
</html>