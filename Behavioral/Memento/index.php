<?php

declare(strict_types=1);

use App\Chamado;

require_once __DIR__ . '/vendor/autoload.php';

echo "================= Alteração de Status =================";
echo "<br><br><br>";

$chamado = new Chamado();

echo "Status chamado: " . $chamado->getStatus();
echo "<br><br>";

$chamado->abrir();
echo "Status chamado: " . $chamado->getStatus();
echo "<br><br>";

$memento = $chamado->salvaMemento();
$chamado->fechar();
echo "Status chamado: " . $chamado->getStatus();
echo "<br><br>";

$chamado->restoraStatus($memento);
echo "Status chamado: " . $chamado->getStatus();
echo "<br><br>";
