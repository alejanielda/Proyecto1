function CheckLOG () {
	mensaje = "ATENCION!!!... Ingrese:\n";
	error   = false;

	USU    = document.getElementById("dataUSU").value;
	CON    = document.getElementById("dataCON").value;

	if (USU=="") {
		error   = true;
		mensaje = mensaje+"Usuario:\n"
	} //end if
	if (CON=="") {
		error   = true;
		mensaje = mensaje+"Contraseña:\n"
	} //end if

	if (error) {
		window.alert(mensaje);
	} else {
		document.getElementById("dataFRM").submit();
	} //end if
} // end function

function CheckREG () {
	mensaje = "ATENCION!!!... Ingrese:\n";
	error   = false;

	USU    = document.getElementById("dataUSU").value;
	CON    = document.getElementById("dataCON").value;

	if (USU=="") {
		error   = true;
		mensaje = mensaje+"Usuario:\n"
	} //end if
	if (CON=="") {
		error   = true;
		mensaje = mensaje+"Contraseña:\n"
	} //end if

	if (error) {
		window.alert(mensaje);
	} else {
		document.getElementById("dataFRM").submit();
	} //end if
} // end function