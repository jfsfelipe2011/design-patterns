<?php

declare(strict_types=1);

namespace App;

class ProcessaPedidoOnline extends ProcessaPedido
{

    /**
     * Metodo que calcula um desconto
     *
     * @param Pedido $pedido
     * @return float
     */
    public function calculaDesconto(Pedido $pedido): float
    {
        return $pedido->calculaValor() * 0.9;
    }

    /**
     * Método que calcula um frete
     *
     * @param float $valor
     * @return float
     */
    public function calculaFrete(float $valor): float
    {
        return $valor + 50;
    }
}
