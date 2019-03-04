<?php

declare(strict_types=1);

namespace Tests;

use App\AndExpression;
use App\Expression;
use App\TerminalExpression;
use PHPUnit\Framework\TestCase;

class AndExpressionTest extends TestCase
{
    /** @var Expression */
    private $expr1;

    /** @var Expression */
    private $expr2;

    /** @var Expression */
    private $expression;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->expr1 = new TerminalExpression("Cavalo");
        $this->expr2 = new TerminalExpression("Sapo");
        $this->expression = new AndExpression($this->expr1, $this->expr2);
    }

    /**
     * Teste interpreter
     */
    public function testRetornaVardadeiroCasoAsDuasExpressoesForemVerdade()
    {
        $this->assertTrue($this->expression->interpreter("Cavalo,Sapo"));
    }

    /**
     * Teste interpreter
     */
    public function testRetornaFalsoCasoUmExpressaoNaoSejaVerdade()
    {
        $this->assertFalse($this->expression->interpreter("Cavalo,Morça"));
        $this->assertFalse($this->expression->interpreter("Águia,Sapo"));
        $this->assertFalse($this->expression->interpreter("Cavalo"));
    }
}
