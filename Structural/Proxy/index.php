<?php

declare(strict_types=1);

use App\ImagemProxy;

require_once __DIR__ . '/vendor/autoload.php';

echo "================= Imagens =================";
echo "<br><br><br>";

$imagem = new ImagemProxy("nuvens.jpeg");

echo $imagem->getNomeArquivo();
echo "<br>";
echo $imagem->mostraImagem();
