<?php

declare(strict_types=1);

namespace App\Implementor;

interface JanelaImplementor
{
    /** Método que deve fazer o desenho de uma janela */
    public function desenhaJanela(string $titulo): string;

    /** Método que deve fazer o desenho de um botão */
    public function desenhaBotao(string $titulo): string;
}
