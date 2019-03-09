<?php

declare(strict_types=1);

namespace Tests;

use App\Pedido;
use App\ProcessaPedidoOnline;
use PHPUnit\Framework\TestCase;

class ProcessaPedidoOnlineTest extends TestCase
{
    /** @var Pedido */
    private $pedido;

    /** @var ProcessaPedidoOnline */
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

        $this->processo = new ProcessaPedidoOnline();
    }

    /**
     * Teste processa
     */
    public function testCalculaDezPorCentoDeDescontoECinquentaDeFreteEmPedidoOnline()
    {
        $result = $this->processo->processa($this->pedido);

        $this->assertInternalType("string", $result);
        $this->assertEquals("Pedido processado no valor de 185", $result);
    }

    /**
     * Teste calculaDesconto
     */
    public function testCalculaDezPorCentoDeUmPedidoOnline()
    {
        $result = $this->processo->calculaDesconto($this->pedido);

        $this->assertInternalType("float", $result);
        $this->assertEquals(135, $result);
    }

    /**
     * Teste calculaFrete
     */
    public function testCalculaCinquentaDeFreteEmPedidoOnline()
    {
        $result = $this->processo->calculaFrete(0);

        $this->assertInternalType("float", $result);
        $this->assertEquals(50, $result);
    }
}
