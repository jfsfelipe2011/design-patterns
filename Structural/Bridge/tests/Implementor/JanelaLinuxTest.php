<?php

declare(strict_types=1);

namespace Tests\Implementor;

use App\Implementor\JanelaLinux;
use PHPUnit\Framework\TestCase;

class JanelaLinuxTest extends TestCase
{
    /** @var JanelaLinux */
    private $janela;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->janela = new JanelaLinux();
    }

    /**
     * Teste desenhaJanela
     */
    public function testRetornoStringAoDesenharUmaJanela()
    {
        $janela = $this->janela->desenhaJanela('Janela Teste');

        $this->assertInternalType('string', $janela);
        $this->assertContains('Linux', $janela);
    }

    /**
     * Teste desenhaBotao
     */
    public function testRetornoStringAoDesenharUmBotao()
    {
        $botao = $this->janela->desenhaBotao('Botão Teste');

        $this->assertInternalType('string', $botao);
        $this->assertContains('Linux', $botao);
    }
}
