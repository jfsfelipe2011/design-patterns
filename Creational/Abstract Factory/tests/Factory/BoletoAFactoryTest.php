<?php

declare(strict_types=1);

namespace Tests\Factory;

use App\Boleto\BoletoA;
use App\Factory\BoletoAFactory;
use PHPUnit\Framework\TestCase;

class BoletoAFactoryTest extends TestCase
{
    /**
     * Testa criação de um Boleto A
     */
    public function testConstrucaoDeUmNovoBoletoA()
    {
        $boletoA = new BoletoAFactory();
        $boleto  = $boletoA(100.00, 'Teste', 'Teste');

        $this->assertInstanceOf(BoletoA::class, $boleto);
    }
}