<?php 

include 'inc/comun.php';
//Datos de configuraci&oacute;n para header

	/*$bd = new GestarBD;
	$suma="select * from estados";
	$bd->consulta($suma);
    $suma2 = $bd->numeroFilas();
*/
$bd = new GestarBD;    
include 'inc/head.php';
include 'inc/header2.php';

//include 'content.php'; 

include 'inc/opciones2.php';

//echo $swphp_contenido;
//echo $_SESSION['autenticado'];
include 'inc/finhtml.php';
