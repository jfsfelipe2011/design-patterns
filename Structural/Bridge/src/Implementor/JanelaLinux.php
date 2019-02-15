<?php

declare(strict_types=1);

namespace App\Implementor;

class JanelaLinux implements JanelaImplementor
{

    /** Método que faz o desenho de uma janela */
    public function desenhaJanela(string $titulo): string
    {
        return $titulo . " - Janela Linux";
    }

    /** Método que faz o desenho de um botão */
    public function desenhaBotao(string $titulo): string
    {
        return $titulo . " - Botão Linux";
    }
}