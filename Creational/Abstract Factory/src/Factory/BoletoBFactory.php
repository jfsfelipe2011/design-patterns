<?php

declare(strict_types=1);

namespace App\Factory;

use App\Boleto\BoletoB;

class BoletoBFactory
{
    /**
     * Constroi um BoletoB
     *
     * @param int $valor
     * @param string $beneficiario
     * @param string $pagador
     * @return BoletoB
     */
    public function __invoke(float $valor, string $beneficiario, string $pagador): BoletoB
    {
        return new BoletoB($valor, $beneficiario, $pagador);
    }
}