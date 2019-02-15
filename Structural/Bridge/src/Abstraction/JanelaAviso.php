<?php

declare(strict_types=1);

namespace App\Abstraction;

use App\Implementor\JanelaImplementor;

class JanelaAviso extends JanelaAbstract
{
    /**
     * JanelaAviso constructor.
     *
     * @param JanelaImplementor $janela
     */
    public function __construct(JanelaImplementor $janela)
    {
        parent::__construct($janela);
    }

    /** Método que faz o desenho de um componente */
    public function desenhar(): string
    {
        $result  = $this->desenhaJanela("Aviso") . "<br>";
        $result .= $this->desenhaBotao("OK");

        return $result;
    }
}
