<?php

declare(strict_types=1);

namespace Tests;

use App\NumberFormatter;
use App\StaticFactory;
use App\StringFormatter;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    /**
     * Teste factory
     */
    public function testCriaUmNovoStringFormatter()
    {
        $formatter = StaticFactory::factory('string');

        $this->assertInternalType('object', $formatter);
        $this->assertInstanceOf(StringFormatter::class, $formatter);
    }

    /**
     * Teste factory
     */
    public function testCriaUmNovoNumberFormatter()
    {
        $formatter = StaticFactory::factory('number');

        $this->assertInternalType('object', $formatter);
        $this->assertInstanceOf(NumberFormatter::class, $formatter);
    }

    /**
     * Teste factory
     *
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Tipo desconhecido
     */
    public function testRetornaUmaExcessaoCasoTipoNaoExista()
    {
        StaticFactory::factory('object');
    }
}
