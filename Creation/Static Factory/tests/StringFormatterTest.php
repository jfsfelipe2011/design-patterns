<?php

declare(strict_types=1);

namespace Tests;

use App\StringFormatter;
use PHPUnit\Framework\TestCase;

class StringFormatterTest extends TestCase
{
    /** @var StringFormatter */
    private $formatter;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->formatter = new StringFormatter();
    }

    /**
     * Teste format
     */
    public function testRetornaUmaStringDepoisDeFormatar()
    {
        $this->assertInternalType("string", $this->formatter->format(5));
        $this->assertEquals("5", $this->formatter->format(5));
    }

    /**
     * Teste format
     */
    public function testTransformaArrayEmString()
    {
        $array = [
            'gato',
            'cachorro',
            'papagaio'
        ];

        $this->assertInternalType("string", $this->formatter->format($array));
        $this->assertContains('gato', $this->formatter->format($array));
        $this->assertContains('cachorro', $this->formatter->format($array));
        $this->assertContains('papagaio', $this->formatter->format($array));
    }
}
