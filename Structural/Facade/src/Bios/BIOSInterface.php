<?php

declare(strict_types=1);

namespace App\Bios;

use App\SistemaOperacional\SistemaOperacionalInterface;

interface BIOSInterface
{
    /** Método que deve inicializar a bios */
    public function inicializa(): string;

    /** Método que deve adicionar um sistema a bios */
    public function lanca(SistemaOperacionalInterface $os): void;

    /** Método que deve desligar a bios */
    public function desliga(): string;
}
