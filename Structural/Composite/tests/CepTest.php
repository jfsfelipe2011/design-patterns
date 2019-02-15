<?php

declare(strict_types=1);

namespace Tests;

use App\Cep;
use PHPUnit\Framework\TestCase;

class CepTest extends TestCase
{
    /** @var Cep */
    private $cep;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->cep = new Cep(97666123);
    }

    /**
     * Teste toString
     */
    public function testRetornaStringNaInstanciaDeCep()
    {
        $this->assertInternalType('string', $this->cep->__toString());
        $this->assertEquals('97666123', $this->cep->__toString());
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessageRegExp /Não pode ser adicionado o component/
     *
     * @throws \Exception
     */
    public function testLancaExceptionAoTentarAdicionarComponent()
    {
        $this->cep->adicionar(new Cep(97666123));
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessageRegExp /Não pode ser removido o component/
     *
     * @throws \Exception
     */
    public function testLancaExceptionAoTentarRemoverComponent()
    {
        $this->cep->remover('97666123');
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessageRegExp /Não pode ser encontrado o component/
     *
     * @throws \Exception
     */
    public function testLancaExceptionAoTentarBuscarComponent()
    {
        $this->cep->getComponent('97666123');
    }
}
