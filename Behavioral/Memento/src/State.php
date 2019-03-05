<?php

declare(strict_types=1);

namespace App;

class State
{
    /** @var string */
    const CRIADO = 'criado';

    /** @var string */
    const ABERTO = 'aberto';

    /** @var string */
    const FECHADO = 'fechado';

    /** @var array */
    private $statusValido = [
        self::CRIADO,
        self::ABERTO,
        self::FECHADO
    ];

    /**
     * @var string
     */
    private $status;

    /**
     * State constructor.
     * @param string $status
     */
    public function __construct(string $status)
    {
        $this->validaStatus($status);

        $this->status = $status;
    }

    /**
     * Valida se o status é válido
     *
     * @return bool
     */
    private function validaStatus(string $status): bool
    {
        if (!in_array($status, $this->statusValido)) {
            throw new \InvalidArgumentException("Status inválido");
        }

        return true;
    }

    /**
     * toString State
     * @return string
     */
    public function __toString(): string
    {
        return $this->status;
    }
}
