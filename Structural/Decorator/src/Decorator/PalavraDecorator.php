<?php

declare(strict_types=1);

namespace App\Decorator;

use App\Palavra\PalavraInterface;

abstract class PalavraDecorator
{
    /** @var PalavraInterface */
    protected $palavra;

    /**
     * PalavraDecorator constructor.
     * @param PalavraInterface $palavra
     */
    public function __construct(PalavraInterface $palavra)
    {
        $this->palavra = $palavra;
    }

    /**
     * Retorna a palavra informada
     *
     * @return string
     */
    public function getPalavra(): string
    {
        return $this->palavra->getPalavra();
    }

    /** Método que deve decorar um objeto */
    abstract public function decorate(): string;
}
