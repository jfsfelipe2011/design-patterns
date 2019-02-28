<?php

declare(strict_types=1);

namespace Tests\SistemaOperacional;

use App\SistemaOperacional\SistemaOperacional;
use App\SistemaOperacional\SistemaOperacionalInterface;
use PHPUnit\Framework\TestCase;

class SistemaOperacionalTest extends TestCase
{
    /** @var SistemaOperacionalInterface */
    private $os;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->os = new SistemaOperacional("Ubuntu v.16.07");
    }

    /**
     * Teste getNome
     */
    public function testRetornaONomeDoSistemaEmFormatoString()
    {
        $this->assertInternalType("string", $this->os->getNome());
        $this->assertEquals("Ubuntu v.16.07", $this->os->getNome());
    }

    /**
     * Teste parada
     */
    public function testRetornaAMensagemDeParadaComoString()
    {
        $this->assertInternalType("string", $this->os->parada());
        $this->assertContains("parado", $this->os->parada());
        $this->assertContains("Ubuntu v.16.07", $this->os->parada());
    }
}
