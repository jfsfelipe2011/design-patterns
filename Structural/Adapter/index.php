<?php

declare(strict_types=1);

use App\Livro\Livro;
use App\EBook\Kindle;
use App\Livro\EBookAdapter;

require_once __DIR__ . '/vendor/autoload.php';

try {
    $livro = new Livro(100);
    $livro->abreLivro();

    for ($i = 0; $i < 33; $i++) {
        $livro->viraPagina();
    }

    var_dump($livro->getPaginaAtual());
} catch (\Exception $exception) {
    var_dump($exception->getMessage());
}

echo "<br><br><br>";

try {
    $kindle = new Kindle(100);
    $livro = new EBookAdapter($kindle);

    $livro->abreLivro();

    for ($i = 0; $i < 33; $i++) {
        $livro->viraPagina();
    }

    var_dump($livro->getPaginaAtual());
} catch (\Exception $exception) {
    var_dump($exception->getMessage());
}
