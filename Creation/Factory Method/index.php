<?php

declare(strict_types=1);

use App\Creator\BoletoAFactory;
use App\Creator\BoletoBFactory;

require_once __DIR__ . '/vendor/autoload.php';

echo "================= DADOS =================";
echo "<br><br><br>";

$valor = 198.00;
$beneficiario = 'Aline Medeiros';
$pagador = 'Caio Soares';

echo "Valor: {$valor} <br>";
echo "Beneficiário: {$beneficiario} <br>";
echo "Pagador: {$pagador} <br><br><br>";

echo "================= BOLETO A =================";
echo "<br><br><br>";

$boleto = new BoletoAFactory();
$boletoA = $boleto->createBoleto($valor, $beneficiario, $pagador);

echo "Número do boleto  {$boletoA->gerarNossoNumero()} <br>" ;
echo "Valor do Boleto: {$boletoA->getValor()} <br><br><br>";

echo "================= BOLETO B =================";
echo "<br><br><br>";

$boleto = new BoletoBFactory();
$boletoB = $boleto->createBoleto($valor, $beneficiario, $pagador);

echo "Número do boleto  {$boletoB->gerarNossoNumero()} <br>" ;
echo "Valor do Boleto: {$boletoB->getValor()} <br><br><br>";
