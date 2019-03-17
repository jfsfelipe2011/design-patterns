<?php

declare(strict_types=1);

namespace App;

interface ServiceLocatorInterface
{
    /** Método que adiciona um serviço */
    public function add(string $classe, $servico): void;

    /** Método que verifica um serviço */
    public function has(string $classe): bool;

    /** Método que retorna um serviço */
    public function get(string $classe);
}
