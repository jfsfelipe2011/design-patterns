<?php

declare(strict_types=1);

namespace Tests\Implementor;

use App\Implementor\JanelaMac;
use PHPUnit\Framework\TestCase;

class JanelaMacTest extends TestCase
{
    /** @var JanelaMac */
    private $janela;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->janela = new JanelaMac();
    }

    /**
     * Teste desenhaJanela
     */
    public function testRetornoStringAoDesenharUmaJanela()
    {
        $janela = $this->janela->desenhaJanela('Janela Teste');

        $this->assertInternalType('string', $janela);
        $this->assertContains('Mac', $janela);
    }

    /**
     * Teste desenhaBotao
     */
    public function testRetornoStringAoDesenharUmBotao()
    {
        $botao = $this->janela->desenhaBotao('Botão Teste');

        $this->assertInternalType('string', $botao);
        $this->assertContains('Mac', $botao);
    }
}
