<?php

declare(strict_types=1);

use App\PedidoContext;

require_once __DIR__ . '/vendor/autoload.php';

echo "================= Alteração de Status =================";
echo "<br><br><br>";

$pedido = new PedidoContext();

echo "Status do pedido: " . $pedido->getStatus();
echo "<br><br>";

$pedido->alteraStatus();

echo "Status do pedido: " . $pedido->getStatus();
echo "<br><br>";

$pedido->alteraStatus();

echo "Status do pedido: " . $pedido->getStatus();
echo "<br><br>";
