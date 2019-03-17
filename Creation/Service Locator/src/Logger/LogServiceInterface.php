<?php

declare(strict_types=1);

namespace App\Logger;

interface LogServiceInterface
{
    /** Retorna um debug com a mensagem */
    public function debug(string $message): string;
}
