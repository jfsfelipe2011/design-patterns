<?php

declare(strict_types=1);

use App\LivroPHPPrototype;
use App\LivroSQLPrototype;

require_once __DIR__ . '/vendor/autoload.php';

$livroPHP = new LivroPHPPrototype(
    'Programação',
    'PHP',
    'OReilly Learning PHP 5'
);

echo "================= LIVRO PHP 1 =================";
echo "<br><br><br>";

echo $livroPHP->getDescricao();

$cloneLivroPHP = clone $livroPHP;
$cloneLivroPHP->setTitulo('PHP & MySQL Everyday Apps for Dummies');

echo "<br><br><br>";
echo "================= LIVRO PHP 2 =================";
echo "<br><br><br>";

echo $cloneLivroPHP->getDescricao();

$livroSQL = new LivroSQLPrototype(
    'Banco de Dados',
    'SQL',
    'SQL For Cats'
);

echo "<br><br><br>";
echo "================= LIVRO SQL 1 =================";
echo "<br><br><br>";

echo $livroSQL->getDescricao();

$cloneLivroSQL = clone $livroSQL;
$cloneLivroSQL->setTitulo('OReilly Learning SQL');

echo "<br><br><br>";
echo "================= LIVRO SQL 2 =================";
echo "<br><br><br>";

echo $cloneLivroSQL->getDescricao();
