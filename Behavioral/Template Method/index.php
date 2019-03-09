<?php

declare(strict_types=1);

use App\ProcessaPedidoOnline;
use App\ProcessaPedidoManual;
use App\Pedido;

require_once __DIR__ . '/vendor/autoload.php';

echo "================= Pedido Online =================";
echo "<br><br><br>";

$pedido = new Pedido([
    'item1' => [
        'nome'  => 'item1',
        'valor' => 100.00,
    ],
    'item2' => [
        'nome'  => 'item2',
        'valor' => 50.00,
    ]
]);

$processoOnline = new ProcessaPedidoOnline();

echo $processoOnline->processa($pedido);

echo "<br><br><br>";
echo "================= Pedido Manual =================";
echo "<br><br><br>";

$processoManual = new ProcessaPedidoManual();

echo $processoManual->processa($pedido);
