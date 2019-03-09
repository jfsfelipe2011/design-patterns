<?php

declare(strict_types=1);

namespace Tests;

use App\Pedido;
use App\ProcessaPedidoManual;
use PHPUnit\Framework\TestCase;

class ProcessaPedidoManualTest extends TestCase
{
    /** @var Pedido */
    private $pedido;

    /** @var ProcessaPedidoManual */
    private $processo;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->pedido = new Pedido([
            'item1' => [
                'nome'  => 'item1',
                'valor' => 100.00,
            ],
            'item2' => [
                'nome'  => 'item2',
                'valor' => 50.00,
            ]
        ]);

        $this->processo = new ProcessaPedidoManual();
    }

    /**
     * Teste processa
     */
    public function testCalculaDezPorCentoDeDescontoECinquentaDeFreteEmPedidoManual()
    {
        $result = $this->processo->processa($this->pedido);

        $this->assertInternalType("string", $result);
        $this->assertEquals("Pedido processado no valor de 120", $result);
    }

    /**
     * Teste calculaDesconto
     */
    public function testCalculaDezPorCentoDeUmPedidoManual()
    {
        $result = $this->processo->calculaDesconto($this->pedido);

        $this->assertInternalType("float", $result);
        $this->assertEquals(120, $result);
    }

    /**
     * Teste calculaFrete
     */
    public function testCalculaCinquentaDeFreteEmPedidoManual()
    {
        $result = $this->processo->calculaFrete(0);

        $this->assertInternalType("float", $result);
        $this->assertEquals(0, $result);
    }
}
