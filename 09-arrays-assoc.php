<?php include 'includes/header.php';

$cliente = [
    'Nombre' => 'Juan',
    'Saldo' => 200,
    'Informacion' => [
        'Tipo' => 'Premium'
    ]
    ];

echo "<pre>";
var_dump($cliente['Nombre']);
echo "</pre>";

echo $cliente['Informacion']['Tipo'];

$cliente['Codigo'] = 12121212121;


echo "<pre>";
var_dump($cliente);
echo "</pre>";


include 'includes/footer.php';