<?php

declare(strict_types=1);

use App\ItemFactory;

require_once __DIR__ . '/vendor/autoload.php';

echo "================= Item =================";
echo "<br><br><br>";

$item = new ItemFactory();
$item = $item();

$item->setNome('Concerto de Celular');
$item->setQuantidade(1);
$item->setValor(50);

echo $item;
