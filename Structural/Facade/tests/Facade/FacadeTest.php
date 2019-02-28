<?php

declare(strict_types=1);

namespace Tests\Facade;

use App\Bios\BIOS;
use App\Bios\BIOSInterface;
use App\Facade\Facade;
use App\SistemaOperacional\SistemaOperacional;
use App\SistemaOperacional\SistemaOperacionalInterface;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    /** @var BIOSInterface */
    private $bios;

    /** @var SistemaOperacionalInterface */
    private $os;

    /** @var Facade */
    private $facade;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->bios   = new BIOS();
        $this->os     = new SistemaOperacional("Windows 7");
        $this->facade = new Facade($this->os, $this->bios);
    }

    /**
     * Teste liga
     */
    public function testRetornaStringDeInicializacaoComOSAoLigar()
    {
        $this->assertInternalType("string", $this->facade->liga());
        $this->assertContains("Windows 7", $this->facade->liga());

        $this->assertNotEquals("Bios inicializada sem SO", $this->facade->liga());
    }

    /**
     * Teste desliga
     */
    public function testRetornaMensagensDeDesligarOSEBios()
    {
        $this->assertInternalType("string", $this->facade->desliga());
        $this->assertContains("Bios desligada", $this->facade->desliga());
        $this->assertContains("Sistema operacional Windows 7 parado", $this->facade->desliga());
    }
}
