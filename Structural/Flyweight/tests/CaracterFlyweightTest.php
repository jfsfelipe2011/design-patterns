<?php

declare(strict_types=1);

namespace Tests;

use App\CaracterFlyweight;
use PHPUnit\Framework\TestCase;

class CaracterFlyweightTest extends TestCase
{
    /**
     * Teste renderiza
     */
    public function testRenderizaUmaMensagemComOCaracterInformado()
    {
        $caracter = new CaracterFlyweight('a');

        $this->assertInternalType("string", $caracter->renderiza("Arial"));
        $this->assertContains("Caracter a renderizado", $caracter->renderiza("Arial"));
        $this->assertContains("Arial", $caracter->renderiza("Arial"));
    }
}
