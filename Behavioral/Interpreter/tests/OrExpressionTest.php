<?php

declare(strict_types=1);

namespace Tests;

use App\Expression;
use App\OrExpression;
use App\TerminalExpression;
use PHPUnit\Framework\TestCase;

class OrExpressionTest extends TestCase
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
        $this->expression = new OrExpression($this->expr1, $this->expr2);
    }

    /**
     * Teste interpreter
     */
    public function testRetornaVerdadeiroCasoUmaExpressaoForVerdade()
    {
        $this->assertTrue($this->expression->interpreter("Cavalo"));
        $this->assertTrue($this->expression->interpreter("Sapo"));
    }

    /**
     * Teste interpreter
     */
    public function testRetornaFaldoCasoNenhumExpressaoForVerdade()
    {
        $this->assertFalse($this->expression->interpreter("Cachorro"));
    }
}
