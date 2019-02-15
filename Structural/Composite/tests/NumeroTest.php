<?php

declare(strict_types=1);

namespace Tests;

use App\Numero;
use PHPUnit\Framework\TestCase;

class NumeroTest extends TestCase
{
    /** @var Numero */
    private $numero;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->numero = new Numero(100);
    }

    /**
     * Teste toString
     */
    public function testRetornaStringNaInstanciaDeNumero()
    {
        $this->assertInternalType('string', $this->numero->__toString());
        $this->assertEquals('100', $this->numero->__toString());
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessageRegExp /Não pode ser adicionado o component/
     *
     * @throws \Exception
     */
    public function testLancaExceptionAoTentarAdicionarComponent()
    {
        $this->numero->adicionar(new Numero(255));
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessageRegExp /Não pode ser removido o component/
     *
     * @throws \Exception
     */
    public function testLancaExceptionAoTentarRemoverComponent()
    {
        $this->numero->remover('255');
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessageRegExp /Não pode ser encontrado o component/
     *
     * @throws \Exception
     */
    public function testLancaExceptionAoTentarBuscarComponent()
    {
        $this->numero->getComponent('255');
    }
}
