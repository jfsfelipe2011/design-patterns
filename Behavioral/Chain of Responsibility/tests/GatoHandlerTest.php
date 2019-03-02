<?php

declare(strict_types=1);

namespace Tests;

use App\GatoHandler;
use App\Handler;
use PHPUnit\Framework\TestCase;

class GatoHandlerTest extends TestCase
{
    /** @var Handler */
    private $handler;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->handler = new GatoHandler();
    }

    /**
     * Teste handle GatoHandler
     */
    public function testHandlerGatoTrataARequiscaoCasoSejaStringPeixe()
    {
        $response = $this->handler->handle("Peixe");

        $this->assertInternalType("string", $response);
        $this->assertEquals("Gato: Eu quero comer o Peixe", $response);
    }

    /**
     * Teste handle AbstractHandler
     */
    public function testHandlerPaiTrataARequisicaoCasoNaoSejaStringPeixe()
    {
        $response = $this->handler->handle("Carne");

        $this->assertInternalType("string", $response);
        $this->assertEquals("Nenhum animal respondeu!!", $response);
    }
}
