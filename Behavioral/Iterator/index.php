<?php

declare(strict_types=1);

use App\LivroCollection;
use App\LivroIterator;

require_once __DIR__ . '/vendor/autoload.php';

$colecao = new LivroCollection();
$colecao->addItem("Cachorro");
$colecao->addItem("Macaco");
$colecao->addItem("Leão");

echo "================= Iteração =================";
echo "<br><br><br>";

foreach ($colecao->getIterator() as $key => $item) {
    echo $key . " " . $item . "<br>";
}

echo "<br><br><br>";
echo "================= Iteração Reversa =================";
echo "<br><br><br>";

foreach ($colecao->getReverseIterator() as $key => $item) {
    echo $key . " " . $item . "<br>";
}
