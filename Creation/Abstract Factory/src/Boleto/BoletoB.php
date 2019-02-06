<?php

declare(strict_types=1);

namespace App\Boleto;

class BoletoB implements BoletoInterface
{
    /** @var float */
    const TAXA = 2.00;

    /** @var float */
    private $valor;

    /** @var string */
    private $beneficiario;

    /** @var string */
    private $pagador;

    public function __construct(float $valor, string $beneficiario, string $pagador)
    {
        $this->valor        = $valor;
        $this->beneficiario = $beneficiario;
        $this->pagador      = $pagador;
    }

    /**
     * Método que retorna o campo nosso número de um boleto
     *
     * @return int
     */
    public function gerarNossoNumero(): int
    {
        return (int) str_pad('90' . intval($this->valor + self::TAXA), 10, '0');
    }

    /**
     * Método que retorna o valor do boleto
     *
     * @return float
     */
    public function getValor(): float
    {
        return $this->valor + self::TAXA;
    }
}
