<?php

declare(strict_types=1);

namespace App\Boleto;

interface BoletoInterface
{
    /** Método que deve gerar um inteiro que represente o campo
     *  nosso número de um boleto.
     */
    public function gerarNossoNumero(): int;

    /** Método que deve retornar o valor final de um boleto */
    public function getValor(): float;
}
