<?php

declare(strict_types=1);

namespace App\Parte;

class Roda implements ParteInterface
{
    /** @var string */
    private $nome;

    /**
     * Roda constructor.
     *
     * @param string $nome
     */
    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    /**
     * Roda toString
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->nome;
    }
}
