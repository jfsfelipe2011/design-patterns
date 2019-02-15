<?php

declare(strict_types=1);

namespace App;

class Cep extends EnderecoComponent
{
    /** @var int  */
    private $numero;

    /**
     * Cep constructor.
     * @param int $numero
     */
    public function __construct(int $numero)
    {
        $this->numero = $numero;
    }

    /**
     * Cep toString
     * @return string
     */
    public function __toString(): string
    {
        return (string) $this->numero;
    }
}
