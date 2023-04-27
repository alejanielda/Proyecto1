function CheckProd () {
	mensaje = "ATENCION!!!... Ingrese:\n";
	error   = false;

	descripcion  = document.getElementById("dataDES").value;
	precio       = document.getElementById("dataPRE").value;
    marca        = document.getElementById("dataMAR").value;
    categoria    = document.getElementById("dataCAT").value;
    tienda       = document.getElementById("dataTIE").value;

	if (descripcion=="") {
		error   = true;
		mensaje = mensaje+"Descripcíon:\n"
	} //end if
	if (precio=="") {
		error   = true;
		mensaje = mensaje+"Precio:\n"
	} //end if
    if (marca=="") {
		error   = true;
		mensaje = mensaje+"Marca:\n"
	} //end if
    if (precio=="") {
		error   = true;
		mensaje = mensaje+"Precio:\n"
	} //end if
    if (categoria=="") {
		error   = true;
		mensaje = mensaje+"Categoría:\n"
	} //end if

	if (error) {
		window.alert(mensaje);
	} else {
		document.getElementById("dataFPR").submit();
	} //end if
} // end function

function CheckMarca () {
	mensaje = "ATENCION!!!... Ingrese:\n";
	error   = false;

	
    marca        = document.getElementById("dataMAR").value;
    

	
    if (marca=="") {
		error   = true;
		mensaje = mensaje+"Marca:\n"
	} //end if
    

	if (error) {
		window.alert(mensaje);
	} else {
		document.getElementById("dataFPR").submit();
	} //end if
} // end function

function CheckCAT () {
	mensaje = "ATENCION!!!... Ingrese:\n";
	error   = false;

	
    categoria        = document.getElementById("dataCAT").value;
    

	
    if (categoria=="") {
		error   = true;
		mensaje = mensaje+"Categoria:\n"
	} //end if
    

	if (error) {
		window.alert(mensaje);
	} else {
		document.getElementById("dataFPR").submit();
	} //end if
} // end function

function CheckTIE () {
	mensaje = "ATENCION!!!... Ingrese:\n";
	error   = false;

	
    tienda        = document.getElementById("dataTIE").value;
    

	
    if (tienda=="") {
		error   = true;
		mensaje = mensaje+"Tienda:\n"
	} //end if
    

	if (error) {
		window.alert(mensaje);
	} else {
		document.getElementById("dataFPR").submit();
	} //end if
} // end function

function CheckID () {
	mensaje = "ATENCION!!!... Ingrese:\n";
	error   = false;

	id  = document.getElementById("dataID").value;

	if (id=="") {
		error   = true;
		mensaje = mensaje+"Seleccione una ID:\n"
	} //end if

	if (isNaN(id)) {
		error = true;
		mensaje = mensaje+"ID debe ser numérico:\n";
	}//end if
	
	if (error) {
		window.alert(mensaje);
	} else {
		document.getElementById("dataFPR").submit();
	} //end if
} // end function

function SetPage(page) {
	window.location = page;
}

function ConfirmDEL() {

	confirma = window.confirm("Realmente desea eliminar el Registro?");
	
	if (confirma) {

		document.getElementById("dataFPR").submit();
	} else {

		SetPage('delprod.php');
	}


}