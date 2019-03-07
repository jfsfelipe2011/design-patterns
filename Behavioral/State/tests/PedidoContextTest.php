<?php

declare(strict_types=1);

namespace Tests;

use App\PedidoContext;
use App\State;
use App\State\StatusAberto;
use App\State\StatusCriado;
use App\State\StatusFechado;
use PHPUnit\Framework\TestCase;

class PedidoContextTest extends TestCase
{
    /** @var PedidoContext */
    private $pedido;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->pedido = new PedidoContext();
    }

    /**
     * Teste alteraStatus
     */
    public function testAlteraOsStatusERetornaUmObjetoState()
    {
        $this->assertInternalType("object", $this->pedido->getStatus());
        $this->assertInstanceOf(StatusCriado::class, $this->pedido->getStatus());
        $this->assertEquals('criado', $this->pedido->getStatus()->__toString());

        $this->pedido->alteraStatus();

        $this->assertInternalType("object", $this->pedido->getStatus());
        $this->assertInstanceOf(StatusAberto::class, $this->pedido->getStatus());
        $this->assertEquals('aberto', $this->pedido->getStatus()->__toString());

        $this->pedido->alteraStatus();

        $this->assertInternalType("object", $this->pedido->getStatus());
        $this->assertInstanceOf(StatusFechado::class, $this->pedido->getStatus());
        $this->assertEquals('fechado', $this->pedido->getStatus()->__toString());
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage Não é possível alterar o status
     *
     * Teste alteraStatus
     */
    public function testLancaExcessaoCasoTenteAlterarDoStatusFechado()
    {
        $this->pedido->alteraStatus();
        $this->pedido->alteraStatus();
        $this->pedido->alteraStatus();
    }
}
