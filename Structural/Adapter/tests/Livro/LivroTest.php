<?php

declare(strict_types=1);

namespace Tests\Livro;

use App\Livro\Livro;
use PHPUnit\Framework\TestCase;

class LivroTest extends TestCase
{
    /** @var Livro */
    private $livro;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->livro = new Livro(100);
    }

    /**
     * Teste abreLivro
     *
     * @throws \Exception
     */
    public function testAoAbrirUmLivroVaiParaAPaginaUm()
    {
        $this->livro->abreLivro();

        $this->assertEquals(1, $this->livro->getPaginaAtual());
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage Livro já está em aberto
     *
     * @throws \Exception
     */
    public function testLancaExceptionAoTentarAbrirLivroJaAberto()
    {
        $this->livro->abreLivro();
        $this->livro->viraPagina();

        $this->livro->abreLivro();
    }

    /**
     * Teste abreLivro e fechaLivro
     *
     * @throws \Exception
     */
    public function testAbreLivroDepoisQueEleEFechado()
    {
        $this->livro->abreLivro();
        $this->livro->viraPagina();
        $this->livro->fechaLivro();

        $this->livro->abreLivro();

        $this->assertEquals(1, $this->livro->getPaginaAtual());
    }

    /**
     * Teste viraPagina
     *
     * @throws \Exception
     */
    public function testIncrementaUmQuandoViradoUmaPagina()
    {
        $page = 2;

        $this->livro->abreLivro();
        $this->livro->viraPagina();

        $this->assertEquals($page, $this->livro->getPaginaAtual());

        $this->livro->viraPagina();
        $page++;

        $this->assertEquals($page, $this->livro->getPaginaAtual());
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage O Livro não está aberto
     *
     * @throws \Exception
     */
    public function testLancaExceptionSeLivroNaoEstaAbertoETentaViraPagina()
    {
        $this->livro->viraPagina();
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage Você está no final do livro
     *
     * @throws \Exception
     */
    public function testLancaExceptionAoVirarPaginaEElaEAUltima()
    {
        $livro = new Livro();
        $livro->abreLivro();
        $livro->viraPagina();
    }

    /**
     * Teste voltaPaginaAnterior
     *
     * @throws \Exception
     */
    public function testDecrementaUmQuandoVoltaUmaPagina()
    {
        $page = 2;

        $this->livro->abreLivro();
        $this->livro->viraPagina();

        $this->assertEquals($page, $this->livro->getPaginaAtual());

        $this->livro->voltaPaginaAnterior();
        $page--;

        $this->assertEquals($page, $this->livro->getPaginaAtual());
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage O Livro não está aberto
     *
     * @throws \Exception
     */
    public function testLancaExceptionSeLivroNaoEstaAbertoETentaVoltarUmaPagina()
    {
        $this->livro->voltaPaginaAnterior();
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage Você está no inicio do livro
     *
     * @throws \Exception
     */
    public function testLancaExceptionAoVoltarUmaPaginaEElaEAPrimeira()
    {
        $livro = new Livro();
        $livro->abreLivro();
        $livro->voltaPaginaAnterior();
    }

    /**
     * Teste getPaginaAtual
     *
     * @throws \Exception
     */
    public function testRetornaUmNumeroAoVerificarPaginaAtual()
    {
        $this->livro->abreLivro();

        $this->assertInternalType('integer', $this->livro->getPaginaAtual());
    }
}
