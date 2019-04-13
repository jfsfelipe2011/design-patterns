<?php

declare(strict_types=1);

namespace App\Creator;

use App\Boleto\BoletoInterface;

interface BoletoFactoryInterface
{
    /**
     * Método que deve criar um novo Boleto
     *
     * @param float $valor
     * @param string $beneficiario
     * @param string $pagador
     * @return BoletoInterface
     */
    public function createBoleto(float $valor, string $beneficiario, string $pagador): BoletoInterface;
}
