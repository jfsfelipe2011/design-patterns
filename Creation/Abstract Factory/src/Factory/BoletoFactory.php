<?php

declare(strict_types=1);

namespace App\Factory;

class BoletoFactory
{
    /**
     * Cria um novo Boleto A
     *
     * @param float $valor
     * @param string $beneficiario
     * @param string $pagador
     * @return \App\Boleto\BoletoA
     */
    public function createBoletoA(float $valor, string $beneficiario, string $pagador)
    {
        $boletoA = new BoletoAFactory();
        $boleto = $boletoA($valor, $beneficiario, $pagador);

        return $boleto;
    }

    /**
     * Cria um novo Boleto B
     *
     * @param float $valor
     * @param string $beneficiario
     * @param string $pagador
     * @return \App\Boleto\BoletoB
     */
    public function createBoletoB(float $valor, string $beneficiario, string $pagador)
    {
        $boletoB = new BoletoBFactory();
        $boleto = $boletoB($valor, $beneficiario, $pagador);

        return $boleto;
    }
}