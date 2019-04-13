<?php

declare(strict_types=1);

use App\ConnectionSingleton;

require_once __DIR__ . '/vendor/autoload.php';

$instanciaUm = ConnectionSingleton::getInstance();

var_dump($instanciaUm);
echo "<br><br><br>";

$instanciaDois = ConnectionSingleton::getInstance();

var_dump($instanciaDois);