<?php

declare(strict_types=1);

namespace App;

class Pedido
{
    /** @var array */
    private $itens = [];

    /**
     * Pedido constructor.
     * @param array $itens
     */
    public function __construct(array $itens)
    {
        $this->itens = $itens;
    }

    /**
     * Calcula o valor total de pedidos
     *
     * @return float
     */
    public function calculaValor(): float
    {
        $total = 0;

        if (empty($this->itens)) {
            return $total;
        }


        foreach ($this->itens as $item) {
            $total += $item['valor'];
        }

        return $total;
    }

    /**
     * Retorna os itens informados
     *
     * @return array
     */
    public function getItens(): array
    {
        return $this->itens;
    }
}
