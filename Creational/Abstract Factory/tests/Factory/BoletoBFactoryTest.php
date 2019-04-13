<?php

declare(strict_types=1);

namespace Tests\Factory;

use App\Boleto\BoletoB;
use App\Factory\BoletoBFactory;
use PHPUnit\Framework\TestCase;

class BoletoBFactoryTest extends TestCase
{
    /**
     * Testa criação de um Boleto B
     */
    public function testConstrucaoDeUmNovoBoletoB()
    {
        $boletoB = new BoletoBFactory();
        $boleto  = $boletoB(100.00, 'Teste', 'Teste');

        $this->assertInstanceOf(BoletoB::class, $boleto);
    }
}