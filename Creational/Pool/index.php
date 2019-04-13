<?php

declare(strict_types=1);

use App\WorkerPool;

require_once __DIR__ . '/vendor/autoload.php';

echo "================= CARACTERES =================";
echo "<br><br><br>";

$pool = new WorkerPool();

$worker1 = $pool->get();

echo sprintf("Quantidade na pool: %s", $pool->count());
echo "<br>";
echo sprintf("Caracteres gerados: %s", $worker1->process());
echo "<br><br><br>";

$worker2 = $pool->get();

echo sprintf("Quantidade na pool: %s", $pool->count());
echo "<br>";
echo sprintf("Caracteres gerados: %s", $worker1->process() . $worker2->process());
echo "<br><br><br>";

$pool->dispose($worker2);

$worker3 = $pool->get();

echo sprintf("Quantidade na pool: %s", $pool->count());
echo "<br>";
echo sprintf("Caracteres gerados: %s", $worker1->process() . $worker3->process());
echo "<br><br><br>";
