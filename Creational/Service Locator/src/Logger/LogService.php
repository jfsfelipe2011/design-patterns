<?php

declare(strict_types=1);

namespace App\Logger;

class LogService implements LogServiceInterface
{
    /**
     * Retorna um debug com a mensagem
     *
     * @param string $message
     * @return string
     */
    public function debug(string $message): string
    {
        return sprintf("DEBUG: %s", $message);
    }
}
