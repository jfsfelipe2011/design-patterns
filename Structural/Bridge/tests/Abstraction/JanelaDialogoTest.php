<?php

declare(strict_types=1);

namespace Tests\Abstraction;

use App\Abstraction\JanelaDialogo;
use App\Implementor\JanelaLinux;
use App\Implementor\JanelaMac;
use App\Implementor\JanelaWindows;
use PHPUnit\Framework\TestCase;

class JanelaDialogoTest extends TestCase
{
    /**
     * Teste criação de Janelas de Dialogos Windows
     */
    public function testRetornaPadraoDeJanelaWindows()
    {
        $windows = new JanelaWindows();
        $janelaDialogo = new JanelaDialogo($windows);

        $this->assertInternalType('string', $janelaDialogo->desenhar());
        $this->assertContains('Windows', $janelaDialogo->desenhar());
    }

    /**
     * Teste criação de Janelas de Dialogos Linux
     */
    public function testRetornaPadraoDeJanelaLinux()
    {
        $linux = new JanelaLinux();
        $janelaDialogo = new JanelaDialogo($linux);

        $this->assertInternalType('string', $janelaDialogo->desenhar());
        $this->assertContains('Linux', $janelaDialogo->desenhar());
    }

    /**
     * Teste criação de Janelas de Dialogos Mac
     */
    public function testRetornaPadraoDeJanelaMac()
    {
        $mac = new JanelaMac();
        $janelaDialogo = new JanelaDialogo($mac);

        $this->assertInternalType('string', $janelaDialogo->desenhar());
        $this->assertContains('Mac', $janelaDialogo->desenhar());
    }
}
