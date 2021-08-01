<?php include 'includes/header.php';

$carrito = ['Tablet','Computadora', 'Televison'];

var_dump(in_array('Tablet', $carrito));
var_dump(in_array('Audifonos', $carrito));

//Ordenar elementos de un arreglo
$numeros = array(1,3,4,5,1,2);
sort($numeros);
rsort($numeros);

echo "<pre>";
var_dump($numeros);
echo "</pre>";

$cliente = array(
    'saldo' => 300,
    'tipo' => 'Premium',
    'nombre' => 'Juan'
);

echo "<pre>";
var_dump($cliente);
echo "</pre>";

asort($cliente); //Ordena por valores(orden alfabetico)
ksort($cliente); //Ordena por llaves (Orden alfabetico)
krsort($cliente); //Ordena por lllaver (Orden alfabetico, de la Z a la A)
arsort($cliente); //Primero la letra mas cerca de la Z y luego los numeros, Z primero

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php'; 