<?php

declare(strict_types=1);

use App\Context;
use App\Strategy\SortStrategy;
use App\Strategy\RSortStrategy;

require_once __DIR__ . '/vendor/autoload.php';

echo "================= Ordenação ASC =================";
echo "<br><br><br>";

$data = ['Morango', 'Banana', 'Maça', 'Uva', 'Abacate'];

$context = new Context(new SortStrategy());

foreach ($context->retornaArray($data) as $item) {
    echo $item . "<br>";
}

echo "<br><br><br>";
echo "================= Ordenação DESC =================";
echo "<br><br><br>";

$context->setStrategy(new RSortStrategy());

foreach ($context->retornaArray($data) as $item) {
    echo $item . "<br>";
}
