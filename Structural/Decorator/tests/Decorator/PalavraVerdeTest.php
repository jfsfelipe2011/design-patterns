<?php

declare(strict_types=1);

namespace Tests\Decorator;

use App\Decorator\PalavraVerde;
use App\Palavra\PalavraConcrete;
use App\Palavra\PalavraInterface;
use PHPUnit\Framework\TestCase;

class PalavraVerdeTest extends TestCase
{
    /** @var PalavraInterface */
    private $palavra;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->palavra = new PalavraConcrete("Passáro");
    }

    /**
     * Teste getPalavra
     */
    public function testRetornaUmaStringSemCorNenhuma()
    {
        $palavraVerde = new PalavraVerde($this->palavra);

        $this->assertInternalType("string", $this->palavra->getPalavra());
        $this->assertEquals("Passáro", $this->palavra->getPalavra());
        $this->assertNotContains("Verde", $this->palavra->getPalavra());

        $this->assertInternalType("string", $palavraVerde->getPalavra());
        $this->assertEquals("Passáro", $palavraVerde->getPalavra());
        $this->assertNotContains("Verde", $palavraVerde->getPalavra());
    }

    /**
     * Teste decorator
     */
    public function testRetornaUmaStringComUmaPalavraVermelha()
    {
        $palavraVerde = new PalavraVerde($this->palavra);

        $this->assertInternalType("string", $palavraVerde->decorate());
        $this->assertContains("Passáro", $palavraVerde->decorate());
        $this->assertContains("Verde", $palavraVerde->decorate());
    }
}