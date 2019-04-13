<?php

declare(strict_types=1);

use App\Registry;
use App\Servicos\Connection;
use App\Servicos\Logger;
use App\Servicos\Mail;

require_once __DIR__ . '/vendor/autoload.php';

echo "================= Registry Services =================";
echo "<br><br><br>";

$mail = new Mail();
$logger = new Logger();
$connection = new Connection();

$registry = new Registry();
$registry->set('Mail', $mail);
$registry->set('Logger', $logger);
$registry->set('Connection', $connection);

echo $registry->get('Mail');

echo "<br><br>";

echo $registry->get('Logger');

echo "<br><br>";

echo $registry->get('Connection');
