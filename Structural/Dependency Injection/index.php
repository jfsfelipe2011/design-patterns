<?php

declare(strict_types=1);

use App\Logger;
use App\UsuarioController;

require_once __DIR__ . '/vendor/autoload.php';

echo "================= Controller =================";
echo "<br><br><br>";

$logger = new Logger();
$controller = new UsuarioController($logger);

echo $controller->index();
