<?php 
require("../modelo/modelo.php");
require('../../lib/smarty/libs/Smarty.class.php');



$modelo = new modelo();
$smarty = new Smarty;
$titulo="PROYECTO P&S";
$smarty->assign("titulo",$titulo);


$datos=$modelo->select();
$smarty-> assign ('datos' ,$datos);


if(isset($_REQUEST['opcion'])){

	switch ($_REQUEST['opcion']) {
		case 'agregar':
		$data=$_REQUEST;
		unset($data['opcion']);
		if ($_REQUEST['id_persona']===0){
			$modelo->insertar($data);
		}else {
			$modelo->actualizar($data);
		}
		break;
		case 'eliminar':
		$modelo->eliminar($_REQUEST["id_persona"]);
		break;
		
	}
}
$smarty->display("../template/index.tpl");

?>