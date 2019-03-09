<?php

declare(strict_types=1);

namespace App;

class ProcessaPedidoManual extends ProcessaPedido
{

    /**
     * Metodo que calcula um desconto
     *
     * @param Pedido $pedido
     * @return float
     */
    public function calculaDesconto(Pedido $pedido): float
    {
        return $pedido->calculaValor() * 0.8;
    }

    /**
     * Método que calcula um frete
     *
     * @param float $valor
     * @return float
     */
    public function calculaFrete(float $valor): float
    {
        return $valor;
    }
}
