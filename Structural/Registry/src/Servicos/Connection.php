<?php

declare(strict_types=1);

namespace App\Servicos;

class Connection implements ServiceInterface
{
    /**
     * @return string
     */
    public function __toString(): string
    {
        return 'Serviço de Conexão de Banco de Dados';
    }
}
