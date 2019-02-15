<?php

declare(strict_types=1);

use App\Abstraction\JanelaDialogo;
use App\Implementor\JanelaWindows;
use App\Implementor\JanelaLinux;
use App\Implementor\JanelaMac;

require_once __DIR__ . '/vendor/autoload.php';

echo "================= Janelas Dialogo Windows =================";
echo "<br><br><br>";

$janelaDialogo = new JanelaDialogo(new JanelaWindows());

echo $janelaDialogo->desenhar();

echo "<br><br><br>";
echo "================= Janelas Dialogo Linux =================";
echo "<br><br><br>";

$janelaDialogo->setImplementator(new JanelaLinux());

echo $janelaDialogo->desenhar();

echo "<br><br><br>";
echo "================= Janelas Dialogo Mac =================";
echo "<br><br><br>";

$janelaDialogo->setImplementator(new JanelaMac());

echo $janelaDialogo->desenhar();
