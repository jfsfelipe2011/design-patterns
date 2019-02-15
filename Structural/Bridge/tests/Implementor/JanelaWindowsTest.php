<?php

declare(strict_types=1);

namespace Tests\Implementor;

use App\Implementor\JanelaWindows;
use PHPUnit\Framework\TestCase;

class JanelaWindowsTest extends TestCase
{
    /** @var JanelaWindows */
    private $janela;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->janela = new JanelaWindows();
    }

    /**
     * Teste desenhaJanela
     */
    public function testRetornoStringAoDesenharUmaJanela()
    {
        $janela = $this->janela->desenhaJanela('Janela Teste');

        $this->assertInternalType('string', $janela);
        $this->assertContains('Windows', $janela);
    }

    /**
     * Teste desenhaBotao
     */
    public function testRetornoStringAoDesenharUmBotao()
    {
        $botao = $this->janela->desenhaBotao('Botão Teste');

        $this->assertInternalType('string', $botao);
        $this->assertContains('Windows', $botao);
    }
}
