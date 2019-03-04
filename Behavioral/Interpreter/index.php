<?php

declare(strict_types=1);

use App\TerminalExpression;
use App\OrExpression;
use App\AndExpression;

require_once __DIR__ . '/vendor/autoload.php';

$expr1 = new TerminalExpression("Cavalo caiu na cama");
$expr2 = new TerminalExpression("Sapo saiu de casa");

$or  = new OrExpression($expr1, $expr2);
$and = new AndExpression($expr1, $expr2);

echo "================= Expressão OR =================";
echo "<br><br><br>";

var_dump($or->interpreter("Cavalo"));
echo "<br>";
var_dump($or->interpreter("Sapo"));
echo "<br>";
var_dump($or->interpreter("Cachorro"));

echo "<br><br><br>";
echo "================= Expressão AND =================";
echo "<br><br><br>";

var_dump($and->interpreter("Cavalo,Sapo"));
echo "<br>";
var_dump($or->interpreter("Cavalo,Cachorro"));
echo "<br>";
var_dump($or->interpreter("Macaco,Sapo"));
