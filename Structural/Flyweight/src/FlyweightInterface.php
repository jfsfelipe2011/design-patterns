<?php

declare(strict_types=1);

namespace App;

interface FlyweightInterface
{
    /** Método que deve fazer a renderização */
    public function renderiza(string $estado): string;
}
