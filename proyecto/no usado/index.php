<?php 

require('../lib/smarty/libs/Smarty.class.php');



$titulo="PROYECTO P&S";






$smarty = new Smarty;
$smarty->assign("titulo",$titulo);






$smarty->display("template/index.tpl");





?>