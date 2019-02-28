<?php

declare(strict_types=1);

namespace App\SistemaOperacional;

interface SistemaOperacionalInterface
{
    /** Método que deve informar a parada do sistema */
    public function parada(): string;

    /** Método que deve retornar o nome do sistema */
    public function getNome(): string;
}
