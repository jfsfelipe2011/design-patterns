<?php

declare(strict_types=1);

namespace Tests\Abstraction;

use App\Abstraction\JanelaAviso;
use App\Implementor\JanelaLinux;
use App\Implementor\JanelaMac;
use App\Implementor\JanelaWindows;
use PHPUnit\Framework\TestCase;

class JanelaAvisoTest extends TestCase
{
    /**
     * Teste criação de Janelas de Aviso Windows
     */
    public function testRetornaPadraoDeJanelaWindows()
    {
        $windows = new JanelaWindows();
        $janelaAviso = new JanelaAviso($windows);

        $this->assertInternalType('string', $janelaAviso->desenhar());
        $this->assertContains('Windows', $janelaAviso->desenhar());
    }

    /**
     * Teste criação de Janelas de Aviso Linux
     */
    public function testRetornaPadraoDeJanelaLinux()
    {
        $linux = new JanelaLinux();
        $janelaAviso = new JanelaAviso($linux);

        $this->assertInternalType('string', $janelaAviso->desenhar());
        $this->assertContains('Linux', $janelaAviso->desenhar());
    }

    /**
     * Teste criação de Janelas de Aviso Mac
     */
    public function testRetornaPadraoDeJanelaMac()
    {
        $mac = new JanelaMac();
        $janelaAviso = new JanelaAviso($mac);

        $this->assertInternalType('string', $janelaAviso->desenhar());
        $this->assertContains('Mac', $janelaAviso->desenhar());
    }
}
