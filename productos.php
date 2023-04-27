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
			
			<br><legend>Listado</legend>
			<table id="lst">
			<tr>
					<th>Id</th>
					<th>Descripcíon</th>
					<th>Precio</th>
					<th>Marca</th>
					<th>Categoría</th>
					<th>Tienda</th>
					<th>Modificar</th>
					<th>Eliminar</th>
					</tr>
				
				<?php
					
					include "conexion.php"; 
				
					//capturar filtro del formulario
					
				    
					$marca 		= $_POST["MAR"];
					$categoria  = $_POST["CAT"];
					$tienda 	= $_POST["TIE"];
				    
					if ($marca=="0" AND $categoria=="0" AND $tienda=="0") {
					$sql  = "SELECT p.idPROD,p.dscPROD,p.pcioPROD,m.nomMARCA,c.nomCATEGORIAS,t.nomTIENDA "; 
					$sql .= "FROM productos AS p, marca AS m, categoria AS c, tienda AS t "; 
					$sql .=	"WHERE p.idMARCA_PROD=m.idMARCA AND p.idCAT_PROD=c.idCAT AND p.idTIENDA_PROD=t.idTIENDA ";
					
					} else if ($marca!="0" AND $categoria!="0" AND $tienda!="0") {
					$sql  = "SELECT p.idPROD,p.dscPROD,p.pcioPROD,m.nomMARCA,c.nomCATEGORIAS,t.nomTIENDA "; 
					$sql .= "FROM productos AS p ";
					$sql .= "JOIN marca AS m ON p.idMARCA_PROD=m.idMARCA ";
					$sql .= "JOIN categoria AS c ON p.idCAT_PROD=c.idCAT ";
					$sql .= "JOIN tienda AS t ON p.idTIENDA_PROD=t.idTIENDA ";
					$sql .=	"WHERE p.idMARCA_PROD=$marca AND p.idCAT_PROD=$categoria AND p.idTIENDA_PROD=$tienda ";

					}
					else if ($marca=="0" AND $categoria!="0" AND $tienda!="0") {
						$sql  = "SELECT p.idPROD,p.dscPROD,p.pcioPROD,m.nomMARCA,c.nomCATEGORIAS,t.nomTIENDA "; 
						$sql .= "FROM productos AS p ";
						$sql .= "JOIN marca AS m ON p.idMARCA_PROD=m.idMARCA ";
						$sql .= "JOIN categoria AS c ON p.idCAT_PROD=c.idCAT ";
						$sql .= "JOIN tienda AS t ON p.idTIENDA_PROD=t.idTIENDA ";
						$sql .=	"WHERE p.idCAT_PROD=$categoria AND p.idTIENDA_PROD=$tienda ";
	
						}else if ($marca=="0" AND $categoria=="0" AND $tienda!="0") {
							$sql  = "SELECT p.idPROD,p.dscPROD,p.pcioPROD,m.nomMARCA,c.nomCATEGORIAS,t.nomTIENDA "; 
							$sql .= "FROM productos AS p ";
							$sql .= "JOIN marca AS m ON p.idMARCA_PROD=m.idMARCA ";
							$sql .= "JOIN categoria AS c ON p.idCAT_PROD=c.idCAT ";
							$sql .= "JOIN tienda AS t ON p.idTIENDA_PROD=t.idTIENDA ";
							$sql .=	"WHERE  p.idTIENDA_PROD=$tienda ";
					
							}
						
							else if ($marca!="0" AND $categoria!="0" AND $tienda=="0") {
							$sql  = "SELECT p.idPROD,p.dscPROD,p.pcioPROD,m.nomMARCA,c.nomCATEGORIAS,t.nomTIENDA "; 
							$sql .= "FROM productos AS p ";
							$sql .= "JOIN marca AS m ON p.idMARCA_PROD=m.idMARCA ";
							$sql .= "JOIN categoria AS c ON p.idCAT_PROD=c.idCAT ";
							$sql .= "JOIN tienda AS t ON p.idTIENDA_PROD=t.idTIENDA ";
							$sql .=	"WHERE p.idMARCA_PROD=$marca AND p.idCAT_PROD=$categoria ";
		
							}	
							else if ($marca=="0" AND $categoria!="0" AND $tienda=="0") {
							$sql  = "SELECT p.idPROD,p.dscPROD,p.pcioPROD,m.nomMARCA,c.nomCATEGORIAS,t.nomTIENDA "; 
							$sql .= "FROM productos AS p ";
							$sql .= "JOIN marca AS m ON p.idMARCA_PROD=m.idMARCA ";
							$sql .= "JOIN categoria AS c ON p.idCAT_PROD=c.idCAT ";
							$sql .= "JOIN tienda AS t ON p.idTIENDA_PROD=t.idTIENDA ";
							$sql .=	"WHERE  p.idCAT_PROD=$categoria  ";
		
							}
							 else if ($marca!="0" AND $categoria=="0" AND $tienda=="0") {
							$sql  = "SELECT p.idPROD,p.dscPROD,p.pcioPROD,m.nomMARCA,c.nomCATEGORIAS,t.nomTIENDA "; 
							$sql .= "FROM productos AS p ";
							$sql .= "JOIN marca AS m ON p.idMARCA_PROD=m.idMARCA ";
							$sql .= "JOIN categoria AS c ON p.idCAT_PROD=c.idCAT ";
							$sql .= "JOIN tienda AS t ON p.idTIENDA_PROD=t.idTIENDA ";
							$sql .=	"WHERE p.idMARCA_PROD=$marca ";
		
							}
						 	 else if ($marca!="0" AND $categoria=="0" AND $tienda!="0") {
							$sql  = "SELECT p.idPROD,p.dscPROD,p.pcioPROD,m.nomMARCA,c.nomCATEGORIAS,t.nomTIENDA "; 
							$sql .= "FROM productos AS p ";
							$sql .= "JOIN marca AS m ON p.idMARCA_PROD=m.idMARCA ";
							$sql .= "JOIN categoria AS c ON p.idCAT_PROD=c.idCAT ";
							$sql .= "JOIN tienda AS t ON p.idTIENDA_PROD=t.idTIENDA ";
							$sql .=	"WHERE p.idMARCA_PROD=$marca  AND p.idTIENDA_PROD=$tienda ";
		
							}
					
					$result = mysql_query($sql,$conex);
					
					
					$fila=1;
					//die ($sql);
					while ($regPROD = mysql_fetch_array($result)) {

						$id          = $regPROD["idPROD"];
						$descripcion = $regPROD["dscPROD"];
						$precio      = $regPROD["pcioPROD"];
						$marca       = $regPROD["nomMARCA"];
						$categoria   = $regPROD["nomCATEGORIAS"];
						$tienda      = $regPROD["nomTIENDA"];

						$resto = $fila%2;
						if ($resto==0) {
							echo "<tr class='filaPAR'>\n";
						} else {
							echo "<tr class='filaIMP'>\n";
						}	

						

						$fila++;
						echo "
						
							<td>$id</td>
							<td>$descripcion</td>
							<td>$precio</td>
							<td>$marca</td>
							<td>$categoria</td>
							<td>$tienda</td>
							<td style='text-align:center;'>
								<a href='Procesomodprod.php?ID=$id'>
									<img class='ico' src='images/edit.svg'/>
								</a>	
							</td>
							<td style='text-align:center;'>
								<a href='Procesodelprod.php?ID=$id'>
									<img class='ico' src='images/delete.svg'/>
								</a>
							</td>
							
						";
					}
					
					mysql_close($conex);
					?>		
					
		</fieldset>
	</div>

</body>
</html>

                      