<?php

declare(strict_types=1);

namespace Tests\Veiculo;

use App\Parte\Motor;
use App\Parte\Volante;
use App\Veiculo\Caminhao;
use PHPUnit\Framework\TestCase;

class CaminhaoTest extends TestCase
{
    /** @var Caminhao */
    private $caminhao;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->caminhao = new Caminhao();
    }

    /**
     * Testa toString
     */
    public function testRetornoStringToString()
    {
        $motor = new Motor('Motor V12 a Diesel');
        $volante = new Volante('Volante Caminhão');

        $this->caminhao->setPartes('Motor', $motor);
        $this->caminhao->setPartes('Volante', $volante);

        $this->assertInternalType('string', $this->caminhao->__toString());
    }
}