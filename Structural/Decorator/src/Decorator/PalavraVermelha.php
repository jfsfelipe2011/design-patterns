<?php

declare(strict_types=1);

namespace App\Decorator;

use App\Palavra\PalavraInterface;

class PalavraVermelha extends PalavraDecorator
{
    /**
     * PalavraVermelha constructor.
     * @param PalavraInterface $palavra
     */
    public function __construct(PalavraInterface $palavra)
    {
        parent::__construct($palavra);
    }

    /**
     * Método que decora um objeto
     *
     * @return string
     */
    public function decorate(): string
    {
        return $this->palavra->getPalavra() . " Cor: Vermelho";
    }
}
