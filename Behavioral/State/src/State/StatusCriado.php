<?php

declare(strict_types=1);

namespace App\State;

use App\PedidoContext;

class StatusCriado implements State
{

    /**
     * Método que altera um status
     *
     * @param PedidoContext $context
     */
    public function alteraStatus(PedidoContext $context): void
    {
        $context->setStatus(new StatusAberto);
    }

    /**
     * toString StatusCriado
     * @return string
     */
    public function __toString(): string
    {
        return 'criado';
    }
}
