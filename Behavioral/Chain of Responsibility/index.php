<?php

declare(strict_types=1);

use App\MacacoHandler;
use App\GatoHandler;
use App\CachorroHandler;

require_once __DIR__ . '/vendor/autoload.php';


$macaco   = new MacacoHandler();
$gato     = new GatoHandler();
$cachorro = new CachorroHandler();

$macaco->setNext($gato)
    ->setNext($cachorro);

$comidas = ['Banana', 'Peixe', 'Carne'];

foreach ($comidas as $comida) {
    echo sprintf("Quem quer um(a) %s ?", $comida);
    echo "<br>";
    echo $macaco->handle($comida);
    echo "<br><br><br>";
}
