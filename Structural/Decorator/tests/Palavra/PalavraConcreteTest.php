<?php

declare(strict_types=1);

namespace Tests\Palavra;

use App\Palavra\PalavraConcrete;
use PHPUnit\Framework\TestCase;

class PalavraConcreteTest extends TestCase
{
    /**
     * Teste getPalavra
     */
    public function testRetornaUmaStringApenasComUmaPalavra()
    {
        $palavra = new PalavraConcrete("Passáro");

        $this->assertInternalType("string", $palavra->getPalavra());
        $this->assertEquals("Passáro", $palavra->getPalavra());
        $this->assertNotContains("Vermelha", $palavra->getPalavra());
        $this->assertNotContains("Verde", $palavra->getPalavra());
    }
}
