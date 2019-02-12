<?php

declare(strict_types=1);

namespace Tests\Creator;

use App\Boleto\BoletoB;
use App\Boleto\BoletoInterface;
use App\Creator\BoletoBFactory;
use PHPUnit\Framework\TestCase;

class BoletoBFactoryTest extends TestCase
{
    /** @var BoletoBFactory */
    private $factory;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->factory = new BoletoBFactory();
    }

    /**
     * Teste createBoleto
     */
    public function testRetornoBoletoInterfaceDoTipoBoletoBAoCriarBoleto()
    {
        $boleto = $this->factory->createBoleto(100.00, 'Teste', 'Teste');

        $this->assertInstanceOf(BoletoInterface::class, $boleto);
        $this->assertInstanceOf(BoletoB::class, $boleto);
    }
}
