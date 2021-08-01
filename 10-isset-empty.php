<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes2 = array('Pedro', 'Juan', 'Karen');

$cliente =  [
    'nombre' => 'Juan',
    'Saldo' => 200
];

//Empty - Revisa si un arreglo esta vacio
var_dump(empty($clientes));
var_dump(empty($clientes2));
var_dump(empty($clientes3));

//Isset - Revisa si un arreglo esta creado o si una propiedad esta definida

var_dump(isset($clientes4));

var_dump(isset($cliente['nombre']));

include 'includes/footer.php';