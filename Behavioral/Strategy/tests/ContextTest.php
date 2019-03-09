<?php

declare(strict_types=1);

namespace Tests;

use App\Context;
use App\Strategy\RSortStrategy;
use App\Strategy\SortStrategy;
use PHPUnit\Framework\TestCase;

class ContextTest extends TestCase
{
    /**
     * Teste setStrategy e retornaArray
     */
    public function testOrdenacaoDeArrayConformeStrategyInformado()
    {
        $data = [4, 1, 3, 2, 5, 9];
        $ordenado = [1, 2, 3, 4, 5, 9];

        $context = new Context(new SortStrategy());

        $this->assertInternalType("array", $context->retornaArray($data));
        $this->assertSame($ordenado, $context->retornaArray($data));

        $ordenado = [9, 5, 4, 3, 2, 1];

        $context->setStrategy(new RSortStrategy());

        $this->assertInternalType("array", $context->retornaArray($data));
        $this->assertSame($ordenado, $context->retornaArray($data));
    }
}
