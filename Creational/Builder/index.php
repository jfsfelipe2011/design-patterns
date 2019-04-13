<?php

declare(strict_types=1);

use App\Director\VeiculoDirector;
use App\Builder\CarroBuilder;
use App\Builder\CaminhaoBuilder;

require_once __DIR__ . '/vendor/autoload.php';

$director = new VeiculoDirector();

echo "=================== Carro ===================";
echo "<br><br><br>";

echo $director->build(new CarroBuilder());

echo "<br><br><br>";
echo "=================== Caminhão ===================";
echo "<br><br><br>";

echo $director->build(new CaminhaoBuilder());
