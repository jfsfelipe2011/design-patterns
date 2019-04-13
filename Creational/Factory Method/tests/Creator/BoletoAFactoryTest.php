<?php

declare(strict_types=1);

namespace Tests\Creator;

use App\Boleto\BoletoA;
use App\Boleto\BoletoInterface;
use App\Creator\BoletoAFactory;
use PHPUnit\Framework\TestCase;

class BoletoAFactoryTest extends TestCase
{
    /** @var BoletoAFactory */
    private $factory;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->factory = new BoletoAFactory();
    }

    /**
     * Teste createBoleto
     */
    public function testRetornoBoletoInterfaceDoTipoBoletoAAoCriarBoleto()
    {
        $boleto = $this->factory->createBoleto(100.00, 'Teste', 'Teste');

        $this->assertInstanceOf(BoletoInterface::class, $boleto);
        $this->assertInstanceOf(BoletoA::class, $boleto);
    }
}
