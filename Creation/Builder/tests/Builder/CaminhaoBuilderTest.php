<?php

declare(strict_types=1);

namespace Tests\Builder;

use App\Builder\CaminhaoBuilder;
use App\Veiculo\Veiculo;
use PHPUnit\Framework\TestCase;

class CaminhaoBuilderTest extends TestCase
{
    /** @var CaminhaoBuilder */
    private $caminhaoBuilder;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->caminhaoBuilder = new CaminhaoBuilder();
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testAoAdicionarMotorLancaExceptionCasoNaoSejaCriadoCaminhao()
    {
        $this->caminhaoBuilder->addMotor();
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testAoAdicionarPortasLancaExceptionCasoNaoSejaCriadoCaminho()
    {
        $this->caminhaoBuilder->addPortas();
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testAoAdicionarRodasLancaExceptionCasoNaoSejaCriadoCaminhao()
    {
        $this->caminhaoBuilder->addRodas();
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testAoAdicionarVolanteLancaExceptionCasoNaoSejaCriadoCaminhao()
    {
        $this->caminhaoBuilder->addVolante();
    }

    /**
     * @expectedException \RuntimeException
     */
    public function testAoRetornarUmCarroLancaExceptionCasoNaoSejaCriadoCaminhao()
    {
        $this->caminhaoBuilder->getVeiculo();
    }

    /**
     * Testa getVeiculo
     */
    public function testRetornaUmaInstanciaDeVeiculoAoCriarUmCaminhao()
    {
        $this->caminhaoBuilder->criaVeiculo();

        $this->assertInstanceOf(Veiculo::class, $this->caminhaoBuilder->getVeiculo());
    }
}
