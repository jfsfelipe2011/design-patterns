<?php

declare(strict_types=1);

use App\Rua;
use App\Numero;
use App\Cep;
use App\EnderecoComposite;
use App\Bairro;

require_once __DIR__ . '/vendor/autoload.php';

$rua = new Rua('Hermes da Silva');

$rua->adicionar(new Numero(1001));
$rua->adicionar(new Cep(910101110));

echo "================= Rua =================";
echo "<br><br><br>";

echo $rua;

$endereco = new EnderecoComposite();

$endereco->adicionar($rua);
$endereco->adicionar(new Bairro('Navegantes', 'Porto Alegre', 'RS'));

echo "<br><br><br>";
echo "================= Endereço =================";
echo "<br><br><br>";

echo $endereco;

echo "<br><br><br>";
echo "================= Endereço sem Rua =================";
echo "<br><br><br>";

$endereco->remover('Rua Hermes');

echo $endereco;
