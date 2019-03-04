<?php

declare(strict_types=1);

namespace Tests;

use App\LivroCollection;
use PHPUnit\Framework\TestCase;

class IteratorTest extends TestCase
{
    /** @var array */
    private $livros;

    /** @var LivroCollection */
    private $colecao;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->livros = [
            "Livro PHP",
            "Livro SQL",
            "Livro PYTHON"
        ];

        $this->colecao = new LivroCollection();
        $this->colecao->addItem("Livro PHP");
        $this->colecao->addItem("Livro SQL");
        $this->colecao->addItem("Livro PYTHON");
    }

    /**
     * Teste getIterator
     */
    public function testFazAIteracaoDentroDeUmaColecaoDeFormaAutomatica()
    {
        $this->assertInternalType("array", $this->colecao->getItens());
        $this->assertSame($this->livros, $this->colecao->getItens());

        foreach ($this->colecao->getIterator() as $key => $item) {
            $this->assertInternalType("string", $item);
            $this->assertEquals($this->livros[$key], $item);
        }
    }

    /**
     * Teste getIterator
     */
    public function testFazIteracaoDentroDeUmaColecaoDeFormaManual()
    {
        $iterator = $this->colecao->getIterator();

        for ($i = 0; $i < count($this->livros); $i++) {
            $this->assertInternalType("string", $iterator->current());
            $this->assertEquals($this->livros[$i], $iterator->current());
            $this->assertInternalType("integer", $iterator->key());
            $this->assertEquals($i, $iterator->key());
            $iterator->next();
        }
    }

    /**
     * Teste getReverseIterator
     */
    public function testFazIteracaoReversaDeUmaColecao()
    {
        $livros = [
            2 => "Livro PYTHON",
            1 => "Livro SQL",
            0 => "Livro PHP"
        ];

        foreach ($this->colecao->getReverseIterator() as $key => $item) {
            $this->assertInternalType("string", $item);
            $this->assertEquals($livros[$key], $item);
        }
    }
}
