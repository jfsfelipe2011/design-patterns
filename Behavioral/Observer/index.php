<?php

declare(strict_types=1);

use App\User;
use App\UserObserver;

require_once __DIR__ . '/vendor/autoload.php';

echo "================= Usuários alterados =================";
echo "<br><br><br>";

$user = new User();
$observer = new UserObserver();

$user->attach($observer);

$user->trocaEmail("juan@gmail.com");
$user->trocaEmail("saulo@gmail.com");
$user->trocaEmail("jaqueline@gmail.com");

foreach ($observer->getUsuariosAlterados() as $usuario) {
    var_dump($usuario);
    echo "<br><br>";
}
