
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tienda Web</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<script type="text/javascript" src="funcionesingusuarios.js"></script>
	
</head>
<body>
	<!-- cabecera -->
	<div id="head">
		<h1>T.Web</h1>
	</div>
	<!-- menu -->
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
	</div><br>
	
	<br><div id="cntLOG">
		<fieldset id="frm">
			<legend>Ingresar</legend>
			<form id="dataFRM" action="procesolog.php" method="POST">
				<table>
					<tr>
						<td>Usuario:</td>
						<td>
							<input class="LOG" id="dataUSU" type="text" name="USU" maxlength="10" >
						</td>
					</tr>
					<tr>
						<td>Contraseña:</td>
						<td>
							<input class="LOG" id="dataCON"  type="password" name="CON" maxlength="15" >
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<input type="button" value="I n g r e s a r" onclick="CheckLOG();">
							<input type="reset" value="C a n c e l a r">
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<a href="usuariosreg.php">R E G I S T R A R</a>
						</td>
					</tr>
		
		
				</table>
				
				
			</form>
			
		</fieldset>
	</div>

</body>
</html>
