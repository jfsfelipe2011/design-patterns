<?php

declare(strict_types=1);

namespace App\State;

use App\PedidoContext;

interface State
{
    /** Método que deve alterar um status */
    public function alteraStatus(PedidoContext $context): void;

    /** toString */
    public function __toString(): string;
}
