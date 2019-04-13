<?php

declare(strict_types=1);

namespace Tests\Builder;

use App\Builder\CarroBuilder;
use App\Veiculo\Veiculo;
use PHPUnit\Framework\TestCase;

class CarroBuilderTest extends TestCase
{
    /** @var CarroBuilder */
    private $carroBuilder;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->carroBuilder = new CarroBuilder();
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testAoAdicionarMotorLancaExceptionCasoNaoSejaCriadoCarro()
    {
        $this->carroBuilder->addMotor();
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testAoAdicionarPortasLancaExceptionCasoNaoSejaCriadoCarro()
    {
        $this->carroBuilder->addPortas();
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testAoAdicionarRodasLancaExceptionCasoNaoSejaCriadoCarro()
    {
        $this->carroBuilder->addRodas();
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testAoAdicionarVolanteLancaExceptionCasoNaoSejaCriadoCarro()
    {
        $this->carroBuilder->addVolante();
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testAoRetornarUmCarroLancaExceptionCasoNaoSejaCriadoCarro()
    {
        $this->carroBuilder->getVeiculo();
    }

    /**
     * Testa getVeiculo
     */
    public function testRetornaUmaInstanciaDeVeiculoAoCriarUmCarro()
    {
        $this->carroBuilder->criaVeiculo();

        $this->assertInstanceOf(Veiculo::class, $this->carroBuilder->getVeiculo());
    }
}
