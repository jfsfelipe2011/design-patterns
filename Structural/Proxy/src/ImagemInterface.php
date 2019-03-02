<?php

declare(strict_types=1);

namespace App;

interface ImagemInterface
{
    /** Método que deve mostrar uma imagem */
    public function mostraImagem(): string;
}
