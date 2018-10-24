<?php 
require("../modelo/modelo.php");

$modelo = new modelo();





//insertar con parametros
//$modelo->insertar(felipe,almanza,789,cr4k);


// insertar con array 
//$data=array("nombre"=>"asdfasd","apellido"=>"asdfasdf","telefono"=>"54654","direccion"=>"call");
//$data["nombre"]="felipe";
//$data["apellido"]="perez"

/*$data=array("nombre"=>"asdfasd","apellido"=>"asdfasdf","telefono"=>"54654","direccion"=>"call");

$sql = "INSERT INTO persona  (".implode(", ", array_keys($data)).")  VALUES (".implode(", ", $data).")  ";

print_r($sql);*/


$data["nombre"]="rafs";
$data["apellido"]="vergara";
$data["telefono"]="123456789";
$data["direccion"]="A 170";


$modelo->insertar($data);



//elminar por id_persona con parametro
//$modelo->eliminar(4);












//actualizar por id_persona con parametro
//$modelo->actualizar(2);

/*$data=array("nombre"=>"asdfasd","apellido"=>"asdfasdf","telefono"=>"54654","direccion"=>"call");

$temp= array();

foreach ($data as $key => $value) {
	$temp[]="$key = '$value'";
	# code...
}

$sql = "UPDATE persona SET ".implode(", ", $temp)."  WHERE id_persona=$id";

print_r($sql);*/










//mostrar
//for ($data=0; $data < ; $data++) { 
//$sql = "UPDATE persona SET  nombre="jhkjh", apellido="jkhh", telefono="5464", direccion="hjghjg" WHERE id_persona=$id";
//}



//$keys=array_keys($data);

//$modelo->actualizar($id,$data);

//print_r(implode(",", $keys));


//print_r($data);



//print_r($modelo->select());



 ?>