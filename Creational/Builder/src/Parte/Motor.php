<?php

declare(strict_types=1);

namespace App\Parte;

class Motor implements ParteInterface
{
    /** @var string */
    private $nome;

    /**
     * Motor constructor.
     *
     * @param string $nome
     */
    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    /**
     * Motor toString
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->nome;
    }
}
