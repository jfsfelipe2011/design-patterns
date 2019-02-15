<?php

declare(strict_types=1);

namespace App\Abstraction;

use App\Implementor\JanelaImplementor;

class JanelaDialogo extends JanelaAbstract
{
    /**
     * JanelaDialogo constructor.
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
        $result  = $this->desenhaJanela("Diálogo") . "<br>";
        $result .= $this->desenhaBotao("Sim") . "<br>";
        $result .= $this->desenhaBotao("Não") . "<br>";
        $result .= $this->desenhaBotao("Cancelar");

        return $result;
    }
}
