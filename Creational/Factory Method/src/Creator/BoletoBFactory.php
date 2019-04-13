<?php

declare(strict_types=1);

namespace App\Creator;

use App\Boleto\BoletoB;
use App\Boleto\BoletoInterface;

class BoletoBFactory implements BoletoFactoryInterface
{
    /**
     * Método que cria um novo Boleto
     *
     * @param float $valor
     * @param string $beneficiario
     * @param string $pagador
     * @return BoletoInterface
     */
    public function createBoleto(float $valor, string $beneficiario, string $pagador): BoletoInterface
    {
        return new BoletoB($valor, $beneficiario, $pagador);
    }
}
