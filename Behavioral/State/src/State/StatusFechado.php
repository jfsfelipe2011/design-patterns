<?php

declare(strict_types=1);

namespace App\State;

use App\PedidoContext;

class StatusFechado implements State
{

    /**
     * Método que altera um status
     *
     * @param PedidoContext $context
     * @throws \Exception
     */
    public function alteraStatus(PedidoContext $context): void
    {
        throw new \Exception("Não é possível alterar o status");
    }

    /**
     * toString StatusFechado
     * @return string
     */
    public function __toString(): string
    {
        return 'fechado';
    }
}
