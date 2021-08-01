<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Televisión',
        'precio' => 400,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor Curvo',
        'precio' => 500,
        'disponible' => false
    ]

];

echo "<pre>";
var_dump($productos);

//Convierte un arreglo a string
$json = json_encode($productos,JSON_UNESCAPED_UNICODE); //De esta forma se incluyen los acentos
var_dump($json);

//Convierte un string  a arreglo
$json_array = json_decode($json);
var_dump($json_array);


echo "</pre>";

include 'includes/footer.php';