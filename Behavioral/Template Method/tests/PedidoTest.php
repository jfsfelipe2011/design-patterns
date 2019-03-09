<?php

declare(strict_types=1);

namespace Tests;

use App\Pedido;
use PHPUnit\Framework\TestCase;

class PedidoTest extends TestCase
{
    /** @var Pedido */
    private $pedido;

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
    }

    /**
     * Teste getItens
     */
    public function testVerificaSeItensSaoOsInformados()
    {
        $itens = [
            'item1' => [
                'nome'  => 'item1',
                'valor' => 100.00,
            ],
            'item2' => [
                'nome'  => 'item2',
                'valor' => 50.00,
            ]
        ];

        $this->assertInternalType("array", $this->pedido->getItens());
        $this->assertSame($itens, $this->pedido->getItens());
    }

    /**
     * calculaValor
     */
    public function testCalculoDoValorTotalDosItens()
    {
        $this->assertInternalType("float", $this->pedido->calculaValor());
        $this->assertEquals(150, $this->pedido->calculaValor());
    }

    /**
     * calculaValor
     */
    public function testRetornaZeroAoCalcularTotalDosItensENaoTemNenhumItem()
    {
        $pedido = new Pedido([]);

        $this->assertEquals(0, $pedido->calculaValor());
    }
}
