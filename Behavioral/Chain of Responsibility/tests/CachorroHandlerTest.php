<?php

declare(strict_types=1);

namespace Tests;

use App\CachorroHandler;
use App\Handler;
use PHPUnit\Framework\TestCase;

class CachorroHandlerTest extends TestCase
{
    /** @var Handler */
    private $handler;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->handler = new CachorroHandler();
    }

    /**
     * Teste handle CachorroHandler
     */
    public function testHandlerCachorroTrataARequiscaoCasoSejaStringOsso()
    {
        $response = $this->handler->handle("Osso");

        $this->assertInternalType("string", $response);
        $this->assertEquals("Cachorro: Eu quero comer o Osso", $response);
    }

    /**
     * Teste handle AbstractHandler
     */
    public function testHandlerPaiTrataARequisicaoCasoNaoSejaStringOsso()
    {
        $response = $this->handler->handle("Carne");

        $this->assertInternalType("string", $response);
        $this->assertEquals("Nenhum animal respondeu!!", $response);
    }
}
