<?php

declare(strict_types=1);

namespace App\Facade;

use App\Bios\BIOSInterface;
use App\SistemaOperacional\SistemaOperacionalInterface;

final class Facade
{
    /** @var SistemaOperacionalInterface */
    private $os;

    /** @var BIOSInterface */
    private $bios;

    /**
     * Facade constructor.
     * @param SistemaOperacionalInterface $os
     * @param BIOSInterface $bios
     */
    public function __construct(SistemaOperacionalInterface $os, BIOSInterface $bios)
    {
        $this->os   = $os;
        $this->bios = $bios;
    }

    /**
     * Método que inicializa os sistemas
     *
     * @return string
     */
    public function liga(): string
    {
        $this->bios->lanca($this->os);
        return $this->bios->inicializa();
    }

    /**
     * Método que desliga o sistema
     *
     * @return string
     */
    public function desliga(): string
    {
        $result  = $this->os->parada() . "<br>";
        $result .= $this->bios->desliga();

        return $result;
    }
}
