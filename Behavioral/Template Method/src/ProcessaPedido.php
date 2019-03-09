<?php

declare(strict_types=1);

namespace App;

abstract class ProcessaPedido
{
    /**
     * Faz um processamento de pedido
     *
     * @param Pedido $pedido
     * @return string
     */
    public function processa(Pedido $pedido): string
    {
        $valor = $this->calculaDesconto($pedido);
         $valor = $this->calculaFrete($valor);

         return sprintf("Pedido processado no valor de %s", $valor);
    }

    /** Metodo que deve calcular um desconto */
    abstract public function calculaDesconto(Pedido $pedido): float;

    /** Método que deve calcular um frete */
    abstract public function calculaFrete(float $valor): float;
}
