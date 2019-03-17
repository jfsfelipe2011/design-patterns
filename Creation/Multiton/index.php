<?php

declare(strict_types=1);

use App\Multiton;

require_once __DIR__ . '/vendor/autoload.php';

$objeto1 = Multiton::getInstance(Multiton::INSTANCIA1);

var_dump($objeto1);
echo "<br><br><br>";

$objeto2 = Multiton::getInstance(Multiton::INSTANCIA1);

var_dump($objeto2);
echo "<br><br><br>";

$objeto3 = Multiton::getInstance(Multiton::INSTANCIA2);

var_dump($objeto3);
