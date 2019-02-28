<?php

declare(strict_types=1);

use App\FlyweightFactory;

require_once __DIR__ . '/vendor/autoload.php';

echo "================= Pool de Caracteres =================";
echo "<br><br><br>";

$i = 0;

$factory = new FlyweightFactory();

$aVerdana = $factory->get("a");
$i++;

echo $aVerdana->renderiza("Verdana");
echo "<br>";
echo sprintf("Número de caracteres usados: %s. Pool: %s", $i, $factory->count());

echo "<br><br><br>";

$aArial = $factory->get("a");
$i++;

echo $aArial->renderiza("Arial");
echo "<br>";
echo sprintf("Número de caracteres usados: %s. Pool: %s", $i, $factory->count());

echo "<br><br><br>";

$bTahoma = $factory->get("b");
$i++;

echo $bTahoma->renderiza("Tahoma");
echo "<br>";
echo sprintf("Número de caracteres usados: %s. Pool: %s", $i, $factory->count());
