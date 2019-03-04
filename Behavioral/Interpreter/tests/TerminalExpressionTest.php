<?php

declare(strict_types=1);

namespace Tests;

use App\Expression;
use App\TerminalExpression;
use PHPUnit\Framework\TestCase;

class TerminalExpressionTest extends TestCase
{
    /** @var Expression */
    private $expression;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->expression = new TerminalExpression("Cavalo subiu na cama");
    }

    /**
     * Teste interpreter
     */
    public function testRetornaVerdadeiroCasoExistaAPalavraNaExpressao()
    {
        $this->assertInternalType("boolean", $this->expression->interpreter("Cavalo"));
        $this->assertTrue($this->expression->interpreter("Cavalo"));
        $this->assertTrue($this->expression->interpreter("cama"));
    }

    /**
     * Teste interpreter
     */
    public function testRetornaFalsoCasoNaoExistaAPalavraNaExpressao()
    {
        $this->assertFalse($this->expression->interpreter("Burro"));
    }
}
