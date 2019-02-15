<?php

declare(strict_types=1);

namespace Tests;

use App\Cep;
use App\EnderecoComponent;
use App\Numero;
use App\Rua;
use PHPUnit\Framework\TestCase;

class RuaTest extends TestCase
{
    /** @var Rua */
    private $rua;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->rua = new Rua('Borges de Medeiros');
    }

    /**
     * Teste toString
     */
    public function testRetornaUmaStringNaInstanciaDeRua()
    {
        $this->assertInternalType('string', $this->rua->__toString());
        $this->assertContains('Borges de Medeiros', $this->rua->__toString());
    }

    /**
     * Teste adicionar
     */
    public function testAoAdicionarUmComponenteEAdicionaNaStringDeRetorno()
    {
        $this->rua->adicionar(new Numero(303));
        $this->rua->adicionar(new Cep(91229330));

        $this->assertContains('303', $this->rua->__toString());
        $this->assertContains('91229330', $this->rua->__toString());
    }

    /**
     * Teste remove
     *
     * @throws \Exception
     */
    public function testAoRemoverUmComponenteEleERemovidoDaStringDeRetorno()
    {
        $this->rua->adicionar(new Numero(303));

        $this->assertContains('303', $this->rua->__toString());

        $this->rua->remover('303');

        $this->assertNotContains('303', $this->rua->__toString());
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage Component não encontrado
     *
     * @throws \Exception
     */
    public function testLancaExceptionAoRemoverComponentQueNaoExiste()
    {
        $this->rua->remover('303');
    }

    /**
     * Teste getComponent
     *
     * @throws \Exception
     */
    public function testRetornaUmaInstanciaDeEnderecoComponentAoBuscarUmComponent()
    {
        $this->rua->adicionar(new Numero(303));

        $this->assertInstanceOf(EnderecoComponent::class, $this->rua->getComponent('303'));
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage Component não encontrado
     *
     * @throws \Exception
     */
    public function testLancaExceptionAoBuscarUmComponentQueNaoExiste()
    {
        $this->rua->getComponent('303');
    }
}
