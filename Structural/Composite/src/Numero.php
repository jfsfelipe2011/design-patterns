<?php

declare(strict_types=1);

namespace App;

class Numero extends EnderecoComponent
{
    /** @var int  */
    private $numero;

    /**
     * Numero constructor.
     * @param int $numero
     */
    public function __construct(int $numero)
    {
        $this->numero = $numero;
    }

    /**
     * Numero toString
     * @return string
     */
    public function __toString(): string
    {
        return (string) $this->numero;
    }
}
