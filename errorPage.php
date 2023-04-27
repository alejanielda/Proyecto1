<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniSistema Personas - ERROR</title>
    <link rel="stylesheet" href="estilo.css" />
</head>
<body>
    <!-- SECCION CABECERA -->
    <div id="head">
        <h1>T.Web</h1>
    </div>
    <!-- SECCION MENÚ -->
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
    <!-- SECCION CONTENIDO -->
    <div id="contenido">
        <fieldset id="frm">
            <legend>E R R O R ! ! !</legend>
                <p id="pp">ATENCION!!!...</p>
                <?php
                    $mensaje = $_GET["MSG"];
                    echo "<p class='txtMSG'>$mensaje</p>\n";
                ?>
            </fieldset>
    </div>
</body>
</html>