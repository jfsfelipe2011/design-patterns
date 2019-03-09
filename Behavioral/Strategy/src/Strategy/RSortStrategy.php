<?php

declare(strict_types=1);

namespace App\Strategy;

class RSortStrategy implements Strategy
{

    /**
     * Método que determina um algoritmo de ordenação
     *
     * @param array $data
     * @return array
     */
    public function algoritmo(array $data): array
    {
        rsort($data);

        return $data;
    }
}
