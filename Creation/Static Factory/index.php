<?php

declare(strict_types=1);

use App\StaticFactory;

require_once __DIR__ . '/vendor/autoload.php';

echo "================= Formatters =================";
echo "<br><br><br>";

$factory = new StaticFactory();

$string = $factory->factory('string');
var_dump($string->format(100));

echo "<br><br>";

$number = $factory->factory('number');
var_dump($number->format('100'));
