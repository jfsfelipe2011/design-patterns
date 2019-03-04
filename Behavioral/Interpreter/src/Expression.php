<?php

declare(strict_types=1);

namespace App;

interface Expression
{
    /** Método que deve interpretar uma palavra dentro da expressão */
    public function interpreter(string $palavra): bool;
}
