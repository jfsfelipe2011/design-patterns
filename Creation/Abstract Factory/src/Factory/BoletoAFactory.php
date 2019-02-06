<?php

declare(strict_types=1);

namespace App\Factory;

use App\Boleto\BoletoA;

class BoletoAFactory
{
    /**
     * Constroi um BoletoA
     *
     * @param int $valor
     * @param string $beneficiario
     * @param string $pagador
     * @return BoletoA
     */
    public function __invoke(float $valor, string $beneficiario, string $pagador): BoletoA
    {
        return new BoletoA($valor, $beneficiario, $pagador);
    }
}