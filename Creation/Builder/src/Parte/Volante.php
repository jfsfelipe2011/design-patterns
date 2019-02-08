<?php

declare(strict_types=1);

namespace App\Parte;

class Volante implements ParteInterface
{
    /** @var string */
    private $nome;

    /**
     * Volante constructor.
     *
     * @param string $nome
     */
    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    /**
     * Volante toString
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->nome;
    }
}
