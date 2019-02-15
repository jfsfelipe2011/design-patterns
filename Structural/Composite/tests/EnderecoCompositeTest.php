<?php

declare(strict_types=1);

namespace Tests;

use App\Bairro;
use App\EnderecoComponent;
use App\EnderecoComposite;
use PHPUnit\Framework\TestCase;

class EnderecoCompositeTest extends TestCase
{
    /** @var EnderecoComposite */
    private $endereco;

    /** @var Bairro */
    private $bairro;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->bairro = new Bairro('Navegantes', 'Porto Alegre', 'RS');
        $this->endereco = new EnderecoComposite();
    }

    /**
     * Teste toString
     */
    public function testRetornaUmaStringNaInstanciaDeEndereco()
    {
        $this->assertInternalType('string', $this->endereco->__toString());
        $this->assertContains('Endereço', $this->endereco->__toString());
    }

    /**
     * Teste adicionar
     */
    public function testAoAdicionarUmComponenteEAdicionaNaStringDeRetorno()
    {
        $this->endereco->adicionar($this->bairro);

        $this->assertContains('Navegantes', $this->endereco->__toString());
    }

    /**
     * Teste remove
     *
     * @throws \Exception
     */
    public function testAoRemoverUmComponenteEleERemovidoDaStringDeRetorno()
    {
        $this->endereco->adicionar($this->bairro);

        $this->assertContains('Navegantes', $this->endereco->__toString());

        $this->endereco->remover('Bairro Navegantes');

        $this->assertNotContains('Navegantes', $this->endereco->__toString());
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage Component não encontrado
     *
     * @throws \Exception
     */
    public function testLancaExceptionAoRemoverComponentQueNaoExiste()
    {
        $this->endereco->remover('Navegantes');
    }

    /**
     * Teste getComponent
     *
     * @throws \Exception
     */
    public function testRetornaUmaInstanciaDeEnderecoComponentAoBuscarUmComponent()
    {
        $this->endereco->adicionar($this->bairro);

        $this->assertInstanceOf(EnderecoComponent::class, $this->endereco->getComponent('Bairro Navegantes'));
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage Component não encontrado
     *
     * @throws \Exception
     */
    public function testLancaExceptionAoBuscarUmComponentQueNaoExiste()
    {
        $this->endereco->getComponent('303');
    }
}
