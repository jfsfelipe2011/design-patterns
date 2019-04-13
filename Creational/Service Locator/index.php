<?php

declare(strict_types=1);

use App\ServiceLocator;
use App\Database\DBService;
use App\Logger\LogService;

require_once __DIR__ . '/vendor/autoload.php';

echo "================= BUSCA DE SERVIÇOS =================";
echo "<br><br><br>";

$locator = new ServiceLocator();
$locator->add(DBService::class, new DBService());
$locator->add(LogService::class, new LogService());

/** @var DBService $db */
$db = $locator->get(DBService::class);
echo $db->getSQL("users");

echo "<br><br><br>";

/** @var LogService $logger */
$logger = $locator->get(LogService::class);
echo $logger->debug("Carregado usuários com sucesso");
