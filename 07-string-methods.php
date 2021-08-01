<?php include 'includes/header.php';

$nombreCliente="Hector Emiliano";

//Conocer extension de un string
echo strlen($nombreCliente);
var_dump($nombreCliente);

//Eliminiar espacios en blanco
$texto=trim($nombreCliente);
echo $texto;

//Convertir a mayusculas
echo strtoupper($nombreCliente);

//Convertirlo en minusculas
echo strtolower($nombreCliente);

$mail1="correo@correo.com";
$mail2="Correo@correo.com";

//Sirve para validar formularios
var_dump(strtolower($mail1)===strtolower($mail2));

//Remplaza Juan por J de la variable indicada
echo str_replace('Hector', 'H', $nombreCliente);

//Revisar si  un str existe, indica su posicion
echo strpos($nombreCliente, 'Emiliano');

//Concatenar texto con variables
$tipoCliente="Premium";

echo "El cliente " . $nombreCliente . " es " . $tipoCliente;

//Concatenar usando similitud con template strings
echo "El cliente {$nombreCliente} es {$tipoCliente}"; 

include 'includes/footer.php';


