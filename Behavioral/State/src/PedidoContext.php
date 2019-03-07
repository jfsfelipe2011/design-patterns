<?php

declare(strict_types=1);

namespace App;

use App\State\State;
use App\State\StatusCriado;

class PedidoContext
{
    /** @var State */
    private $status;

    /**
     * PedidoContext constructor.
     */
    public function __construct()
    {
        $this->status = new StatusCriado();
    }

    /**
     * Seta um novo State
     *
     * @param State $status
     */
    public function setStatus(State $status): void
    {
        $this->status = $status;
    }

    /**
     * Faz a alteração de um State
     */
    public function alteraStatus(): void
    {
        $this->status->alteraStatus($this);
    }

    /**
     * @return State
     */
    public function getStatus(): State
    {
        return $this->status;
    }
}
