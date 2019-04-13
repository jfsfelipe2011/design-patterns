<?php

declare(strict_types=1);

namespace App\Servicos;

class Logger implements ServiceInterface
{
    /**
     * @return string
     */
    public function __toString(): string
    {
        return 'Serviço de Logs';
    }
}
