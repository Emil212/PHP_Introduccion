<?php include 'includes/header.php';

$i = 0;

while($i<10)
{
    echo $i . "<br>";
    $i++;
}
 $i=0;
echo "<br>";

do {
    echo $i . "<br>";
    $i++;
} while ($i < 10);

echo "<br>";

for($i=1;$i<100;$i++)
{
    if($i%3===0 && $i%5===0)
    {
        echo $i . "-FIZZ BUZZ <br>";
    }
    else if($i%3===0)
    {
        echo $i . "-FIZZ <br>";
    }
    else if($i%5===0)
    {
        echo $i . "-BUZZ <br>";

    }
    else
    echo $i . "<br>";
    {

    }

}


//for each 

$clientes = array ('Pedro', 'Juan', 'Karen');

foreach($clientes as $cliente)
{
    echo $cliente . "<br>";
}

echo "<br>";


for($i=0;$i<count($clientes);$i++)
{
    echo $clientes[$i] . "<br>";
}

$cliente = [
    'Nombre'=>'Juan',
    'Saldo' => 200,
    'Tipo' => 'Premium'
];

foreach($cliente as $key => $valor){
 echo $key . " - " . $valor . "<br>";
}




include 'includes/footer.php';