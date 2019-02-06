<?php

declare(strict_types=1);

namespace Tests\Factory;

use App\Boleto\BoletoA;
use App\Boleto\BoletoB;
use App\Factory\BoletoFactory;
use PHPUnit\Framework\TestCase;

class BoletoFactoryTest extends TestCase
{
    /**
     * Testa createBoletoA
     */
    public function testCriaUmNovoBoletoA()
    {
        $boletoFactory = new BoletoFactory();
        $boletoA = $boletoFactory->createBoletoA(100.00, 'Teste', 'Teste');

        $this->assertInstanceOf(BoletoA::class, $boletoA);
    }

    /**
     * Testa createBoletoB
     */
    public function testCriaUmNovoBoletoB()
    {
        $boletoFactory = new BoletoFactory();
        $boletoB = $boletoFactory->createBoletoB(100.00, 'Teste', 'Teste');

        $this->assertInstanceOf(BoletoB::class, $boletoB);
    }
}