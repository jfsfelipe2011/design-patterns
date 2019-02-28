<?php

declare(strict_types=1);

namespace Tests\Bios;

use App\Bios\BIOS;
use App\Bios\BIOSInterface;
use App\SistemaOperacional\SistemaOperacional;
use App\SistemaOperacional\SistemaOperacionalInterface;
use PHPUnit\Framework\TestCase;

class BIOSTest extends TestCase
{
    /** @var BIOSInterface */
    private $bios;

    /** @var SistemaOperacionalInterface */
    private $os;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->bios = new BIOS();
        $this->os   = new SistemaOperacional("Windows 7");
    }

    /**
     * Teste inicializa
     */
    public function testInicializaBiosSemOS()
    {
        $this->assertInternalType("string", $this->bios->inicializa());
        $this->assertEquals("Bios inicializada sem SO", $this->bios->inicializa());
    }

    /**
     * Teste lanca
     */
    public function testInicializaBiosComOS()
    {
        $this->bios->lanca($this->os);

        $mensagem = "Bios inicializada com o SO " . $this->os->getNome();

        $this->assertInternalType("string", $this->bios->inicializa());
        $this->assertEquals($mensagem, $this->bios->inicializa());
    }

    /**
     * Teste desliga
     */
    public function testDesligaABios()
    {
        $this->assertInternalType("string", $this->bios->desliga());
        $this->assertEquals("Bios desligada", $this->bios->desliga());
    }
}
