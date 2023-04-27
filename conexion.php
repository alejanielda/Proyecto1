<?php
					$conex = mysql_connect("localhost","root","");
					if (!$conex) {
						die("ATENCION!!!... NO se pudo CONECTAR al SERVIDOR");
					} // end if

					$selDB = mysql_select_db("tiendaweb",$conex);
					 
					if (!$selDB) {
						die("ATENCION!!!.. NO se pudo SELECCIONAR Base de Datos");
					} // end if
					

?>					