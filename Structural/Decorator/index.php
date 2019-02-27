<?php

declare(strict_types=1);

use App\Palavra\PalavraConcrete;
use App\Decorator\PalavraVermelha;
use App\Decorator\PalavraVerde;

require_once __DIR__ . '/vendor/autoload.php';

$palavra = new PalavraConcrete("Carro");

echo "================= Palavra =================";
echo "<br><br><br>";

echo $palavra->getPalavra();

echo "<br><br><br>";
echo "================= Palavra Vermelha =================";
echo "<br><br><br>";

$palavraVermelha = new PalavraVermelha($palavra);
echo $palavraVermelha->decorate();

echo "<br><br><br>";
echo "================= Palavra Verde =================";
echo "<br><br><br>";

$palavraVerde = new PalavraVerde($palavra);
echo $palavraVerde->decorate();
