<?php

declare(strict_types=1);

use App\Component\Mail;
use App\Component\Database;
use App\Mediator\ConcreteMediator;

require_once __DIR__ . '/vendor/autoload.php';

echo "================= Salvar e Enviar E-mail =================";
echo "<br><br><br>";

$mail = new Mail();
$database = new Database();

new ConcreteMediator($database, $mail);

echo $database->salvar([
    'nome'  => 'Adriano Ferraz',
    'email' => 'adriano@emial.com'
]);
