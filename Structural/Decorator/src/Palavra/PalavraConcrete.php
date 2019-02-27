<?php

declare(strict_types=1);

namespace App\Palavra;

class PalavraConcrete implements PalavraInterface
{
    /** @var string */
    private $palavra;

    /**
     * PalavraConcrete constructor.
     * @param string $palavra
     */
    public function __construct(string $palavra)
    {
        $this->palavra = $palavra;
    }

    /**
     * Método que retorna uma palavra
     *
     * @return string
     */
    public function getPalavra(): string
    {
        return $this->palavra;
    }
}