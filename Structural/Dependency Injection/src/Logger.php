<?php

declare(strict_types=1);

namespace App;

class Logger
{
    /**
     * Retorna uma mensagem
     *
     * @param string $message
     * @return string
     */
    public function debug(string $message): string
    {
        return sprintf("Debug: %s", $message);
    }
}
