<?php

declare(strict_types=1);

namespace App\Strategy;

interface Strategy
{
    /** Método que deve determinar um algoritmo de ordenação */
    public function algoritmo(array $data): array;
}
