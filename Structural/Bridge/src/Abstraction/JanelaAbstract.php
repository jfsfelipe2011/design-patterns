<?php

declare(strict_types=1);

namespace App\Abstraction;

use App\Implementor\JanelaImplementor;

abstract class JanelaAbstract
{
    /** @var JanelaImplementor */
    private $janela;

    /**
     * JanelaAbstract constructor.
     *
     * @param JanelaImplementor $janela
     */
    public function __construct(JanelaImplementor $janela)
    {
        $this->janela = $janela;
    }

    /**
     * Seta um novo implementator
     *
     * @param JanelaImplementor $janela
     */
    public function setImplementator(JanelaImplementor $janela): void
    {
        $this->janela = $janela;
    }

    /**
     * Método que faz o desenho de uma janela
     *
     * @param string $titulo
     * @return string
     */
    public function desenhaJanela(string $titulo)
    {
        return $this->janela->desenhaJanela($titulo);
    }

    /**
     * Método que faz o desenho de um botão
     *
     * @param string $titulo
     * @return string
     */
    public function desenhaBotao(string $titulo)
    {
        return $this->janela->desenhaBotao($titulo);
    }

    /** Método que deve fazer o desenho de um componente */
    abstract public function desenhar(): string;
}