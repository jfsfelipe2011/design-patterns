<?php

declare(strict_types=1);

namespace Tests\Strategy;

use App\Strategy\RSortStrategy;
use PHPUnit\Framework\TestCase;

class SortStrategyTest extends TestCase
{
    /**
     * Teste algoritmo
     */
    public function testFazAOrdenacaoDeFormAscendenteDeUmArray()
    {
        $rsort = new RSortStrategy();

        $data = [3, 7, 9, 1, 6];
        $ordenado = [9, 7, 6, 3, 1];

        $this->assertInternalType("array", $rsort->algoritmo($data));
        $this->assertSame($ordenado, $rsort->algoritmo($data));
    }
}
