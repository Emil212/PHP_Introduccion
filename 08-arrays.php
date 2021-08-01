<?php include 'includes/header.php';

$carrito = ['Tablet', 'Television', 'Computadora'];

//Añadir un elemento en el indice 3 del arreglo
$carrito[3] = 'Nuevo producto';

//Añadir un producto al final
array_push($carrito,'Audifonos');

//Añadir un producto al inicio
array_unshift($carrito, 'Smartwatch');

//Util para ver los elementos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";


include 'includes/footer.php';