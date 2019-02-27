<?php

declare(strict_types=1);

namespace App\Palavra;

interface PalavraInterface
{
    /** Método que deve retornar uma palavra */
    public function getPalavra(): string;
}
