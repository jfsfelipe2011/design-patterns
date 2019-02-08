<?php

declare(strict_types=1);

namespace Tests\Director;

use App\Builder\CaminhaoBuilder;
use App\Builder\CarroBuilder;
use App\Director\VeiculoDirector;
use App\Veiculo\Caminhao;
use App\Veiculo\Carro;
use App\Veiculo\Veiculo;
use PHPUnit\Framework\TestCase;

class VeiculoDirectorTest extends TestCase
{
    /** @var VeiculoDirector */
    private $director;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->director = new VeiculoDirector();
    }

    /**
     * Testa o build de um Carro
     */
    public function testRetornaUmVeiculoDoTipoCarro()
    {
        $carro = $this->director->build(new CarroBuilder());

        $this->assertInstanceOf(Veiculo::class, $carro);
        $this->assertInstanceOf(Carro::class, $carro);
    }

    /**
     * Testa o build de um Caminho
     */
    public function testRetornaUmVeiculoDoTipoCaminhao()
    {
        $caminhao = $this->director->build(new CaminhaoBuilder());

        $this->assertInstanceOf(Veiculo::class, $caminhao);
        $this->assertInstanceOf(Caminhao::class, $caminhao);
    }
}
