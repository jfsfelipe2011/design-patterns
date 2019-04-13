<?php

declare(strict_types=1);

namespace App\Servicos;

class Mail implements ServiceInterface
{
    /**
     * @return string
     */
    public function __toString(): string
    {
        return 'Serviço de E-mail';
    }
}
