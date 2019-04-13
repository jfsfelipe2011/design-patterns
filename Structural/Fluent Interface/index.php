<?php

declare(strict_types=1);

use App\Produto;

require_once __DIR__ . '/vendor/autoload.php';

echo "================= Sistemas Integrados =================";
echo "<br><br><br>";

$produto = new Produto();

$produto->setNome('Caderno')
    ->setValor(20.59)
    ->setDescricao('200 folhas');

echo $produto;
