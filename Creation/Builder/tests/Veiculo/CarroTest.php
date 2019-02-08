<?php

declare(strict_types=1);

namespace Tests\Veiculo;

use App\Parte\Motor;
use App\Parte\Volante;
use App\Veiculo\Carro;
use PHPUnit\Framework\TestCase;

class CarroTest extends TestCase
{
    /** @var Carro */
    private $carro;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->carro = new Carro();
    }

    /**
     * Testa toString
     */
    public function testRetornoStringToString()
    {
        $motor = new Motor('Motor 1.4');
        $volante = new Volante('Volante Esportivo');

        $this->carro->setPartes('Motor', $motor);
        $this->carro->setPartes('Volante', $volante);

        $this->assertInternalType('string', $this->carro->__toString());
    }
}