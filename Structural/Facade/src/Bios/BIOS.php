<?php

declare(strict_types=1);

namespace App\Bios;

use App\SistemaOperacional\SistemaOperacionalInterface;

class BIOS implements BIOSInterface
{
    /** @var SistemaOperacionalInterface */
    private $os;

    /**
     * Método que inicializa a bios
     *
     * @return string
     */
    public function inicializa(): string
    {
        if ($this->os instanceof SistemaOperacionalInterface) {
            return "Bios inicializada com o SO " . $this->os->getNome();
        }

        return "Bios inicializada sem SO";
    }

    /**
     * Método que adiciona um sistema a bios
     *
     * @param SistemaOperacionalInterface $os
     */
    public function lanca(SistemaOperacionalInterface $os): void
    {
        $this->os = $os;
    }

    /**
     * Método que desliga a bios
     *
     * @return string
     */
    public function desliga(): string
    {
        return "Bios desligada";
    }
}
