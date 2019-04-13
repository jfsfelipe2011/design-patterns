<?php

declare(strict_types=1);

use App\Factory\BoletoFactory;

require_once __DIR__ . '/vendor/autoload.php';

$boleto = new BoletoFactory();

echo "================= DADOS =================";
echo "<br><br><br>";

$valor = 100.00;
$beneficiario = 'Roberto Andrade';
$pagador = 'Thomas da Silva';

echo "Valor: {$valor} <br>";
echo "Beneficiário: {$beneficiario} <br>";
echo "Pagador: {$pagador} <br><br><br>";

echo "================= BOLETO A =================";
echo "<br><br><br>";

$boletoA = $boleto->createBoletoA($valor, $beneficiario, $pagador);

echo "Número do boleto  {$boletoA->gerarNossoNumero()} <br>" ;
echo "Valor do Boleto: {$boletoA->getValor()} <br><br><br>";

echo "================= BOLETO B =================";
echo "<br><br><br>";

$boletoB = $boleto->createBoletoB($valor, $beneficiario, $pagador);

echo "Número do boleto  {$boletoB->gerarNossoNumero()} <br>" ;
echo "Valor do Boleto: {$boletoB->getValor()} <br><br><br>";