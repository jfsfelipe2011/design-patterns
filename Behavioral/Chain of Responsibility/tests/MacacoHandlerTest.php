<?php

declare(strict_types=1);

namespace Tests;

use App\MacacoHandler;
use App\Handler;
use PHPUnit\Framework\TestCase;

class MacacoHandlerTest extends TestCase
{
    /** @var Handler */
    private $handler;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->handler = new MacacoHandler();
    }

    /**
     * Teste handle MacacoHandler
     */
    public function testHandlerMacacoTrataARequiscaoCasoSejaStringBanana()
    {
        $response = $this->handler->handle("Banana");

        $this->assertInternalType("string", $response);
        $this->assertEquals("Macaco: Eu quero comer a Banana", $response);
    }

    /**
     * Teste handle AbstractHandler
     */
    public function testHandlerPaiTrataARequisicaoCasoNaoSejaStringBanana()
    {
        $response = $this->handler->handle("Carne");

        $this->assertInternalType("string", $response);
        $this->assertEquals("Nenhum animal respondeu!!", $response);
    }
}
