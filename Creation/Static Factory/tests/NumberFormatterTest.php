<?php

declare(strict_types=1);

namespace Tests;

use App\NumberFormatter;
use PHPUnit\Framework\TestCase;

class NumberFormatterTest extends TestCase
{
    /** @var NumberFormatter */
    private $formatter;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->formatter = new NumberFormatter();
    }

    /**
     * Teste format
     */
    public function testRetornaUmNumeroDepoisDeFormatado()
    {
        $this->assertInternalType('float', $this->formatter->format('5'));
        $this->assertEquals(5, $this->formatter->format('5'));
    }

    /**
     * Teste format
     */
    public function testFazAFormatacaoDeUmDecimalEmDuasCasas()
    {
        $this->assertInternalType('float', $this->formatter->format(2.34463));
        $this->assertEquals(2.34, $this->formatter->format(2.34463));
    }

    /**
     * Teste format
     */
    public function testSomaUmArrayDeNumerosERetornaUmFloat()
    {
        $numeros = ['3', '1', '6'];

        $this->assertInternalType('float', $this->formatter->format($numeros));
        $this->assertEquals(10, $this->formatter->format($numeros));
    }
}
