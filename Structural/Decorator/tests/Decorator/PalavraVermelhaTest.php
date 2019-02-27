<?php

declare(strict_types=1);

namespace Tests\Decorator;

use App\Decorator\PalavraVermelha;
use App\Palavra\PalavraConcrete;
use App\Palavra\PalavraInterface;
use PHPUnit\Framework\TestCase;

class PalavraVermelhaTest extends TestCase
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
        $palavraVermelha = new PalavraVermelha($this->palavra);

        $this->assertInternalType("string", $this->palavra->getPalavra());
        $this->assertEquals("Passáro", $this->palavra->getPalavra());
        $this->assertNotContains("Vermelha", $this->palavra->getPalavra());

        $this->assertInternalType("string", $palavraVermelha->getPalavra());
        $this->assertEquals("Passáro", $palavraVermelha->getPalavra());
        $this->assertNotContains("Vermelha", $palavraVermelha->getPalavra());
    }

    /**
     * Teste decorator
     */
    public function testRetornaUmaStringComUmaPalavraVermelha()
    {
        $palavraVermelha = new PalavraVermelha($this->palavra);

        $this->assertInternalType("string", $palavraVermelha->decorate());
        $this->assertContains("Passáro", $palavraVermelha->decorate());
        $this->assertContains("Vermelho", $palavraVermelha->decorate());
    }
}