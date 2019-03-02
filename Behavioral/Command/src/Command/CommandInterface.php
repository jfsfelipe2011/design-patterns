<?php

declare(strict_types=1);

namespace App\Command;

interface CommandInterface
{
    /** Método que deve executar o comando */
    public function execute(): string;
}
