<?php

declare(strict_types=1);

namespace App\State;

use App\PedidoContext;

class StatusAberto implements State
{
    /**
     * Método que altera um status
     *
     * @param PedidoContext $context
     */
    public function alteraStatus(PedidoContext $context): void
    {
        $context->setStatus(new StatusFechado);
    }

    /**
     * toString StatusAberto
     * @return string
     */
    public function __toString(): string
    {
        return 'aberto';
    }
}
