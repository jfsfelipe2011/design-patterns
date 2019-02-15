<?php

declare(strict_types=1);

namespace Tests;

use App\Bairro;
use App\Cep;
use PHPUnit\Framework\TestCase;

class BairroTest extends TestCase
{
    /** @var Bairro */
    private $bairro;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->bairro = new Bairro('Navegantes', 'Porto Alegre', 'RS');
    }

    /**
     * Teste toString
     */
    public function testRetornaStringNaInstanciaDeBairro()
    {
        $this->assertInternalType('string', $this->bairro->__toString());
        $this->assertContains('Navegantes', $this->bairro->__toString());
        $this->assertContains('Porto Alegre', $this->bairro->__toString());
        $this->assertContains('RS', $this->bairro->__toString());
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessageRegExp /Não pode ser adicionado o component/
     *
     * @throws \Exception
     */
    public function testLancaExceptionAoTentarAdicionarComponent()
    {
        $this->bairro->adicionar(new Cep(97666123));
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessageRegExp /Não pode ser removido o component/
     *
     * @throws \Exception
     */
    public function testLancaExceptionAoTentarRemoverComponent()
    {
        $this->bairro->remover('97666123');
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessageRegExp /Não pode ser encontrado o component/
     *
     * @throws \Exception
     */
    public function testLancaExceptionAoTentarBuscarComponent()
    {
        $this->bairro->getComponent('97666123');
    }
}
