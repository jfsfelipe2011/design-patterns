<?php

declare(strict_types=1);

use App\Bios\BIOS;
use App\SistemaOperacional\SistemaOperacional;
use App\Facade\Facade;

require_once __DIR__ . '/vendor/autoload.php';

echo "================= Sistemas Integrados =================";
echo "<br><br><br>";

$os     = new SistemaOperacional("Ubuntu v.18.07");
$bios   = new BIOS();
$facade = new Facade($os, $bios);

echo "Ligando..." . "<br>";
echo $facade->liga();

echo "<br><br><br>";

echo "Desligando..." . "<br>";
echo $facade->desliga();
