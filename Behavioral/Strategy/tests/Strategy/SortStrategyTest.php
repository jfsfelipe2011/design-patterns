<?php

declare(strict_types=1);

namespace Tests\Strategy;

use App\Strategy\SortStrategy;
use PHPUnit\Framework\TestCase;

class SortStrategyTest extends TestCase
{
    /**
     * Teste algoritmo
     */
    public function testFazAOrdenacaoDeFormAscendenteDeUmArray()
    {
        $sort = new SortStrategy();

        $data = [3, 7, 9, 1, 6];
        $ordenado = [1, 3, 6, 7, 9];

        $this->assertInternalType("array", $sort->algoritmo($data));
        $this->assertSame($ordenado, $sort->algoritmo($data));
    }
}
