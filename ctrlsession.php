<?php

session_start();
if (!isset($_SESSION["nombreUSU"])) {

    header("Location: errorPage.php?MSG=Debe Iniciar Sesíon... ");
}

?>