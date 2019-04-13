<?php

declare(strict_types=1);

namespace App\Parte;

class Porta implements ParteInterface
{
    /** @var string */
    private $nome;

    /**
     * Porta constructor.
     *
     * @param string $nome
     */
    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    /**
     * Porta toString
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->nome;
    }
}
