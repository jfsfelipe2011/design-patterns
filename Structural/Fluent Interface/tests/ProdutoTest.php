<?php

declare(strict_types=1);

namespace Tests;

use App\Produto;
use PHPUnit\Framework\TestCase;

class ProdutoTest extends TestCase
{
    /** @var Produto */
    private $produto;

    /** Config inicial */
    protected function setUp()
    {
        $this->produto = new Produto();
    }

    public function testSetNome(): Produto
    {
        $produto = $this->produto->setNome('Chocolate');

        $this->assertInstanceOf(Produto::class, $produto);
        $this->assertInternalType('object', $produto);

        return $produto;
    }

    /**
     * @depends testSetNome
     *
     * @param Produto $produto
     * @return Produto
     */
    public function testSetValor(Produto $produto): Produto
    {
        $this->assertInstanceOf(Produto::class, $produto->setValor(100));
        $this->assertInternalType('object', $produto);

        return $produto;
    }

    /**
     * @depends testSetValor
     *
     * @param Produto $produto
     * @return Produto
     */
    public function testSetDescricao(Produto $produto): Produto
    {
        $this->assertInstanceOf(Produto::class, $produto->setDescricao('Chocolate branco'));
        $this->assertInternalType('object', $produto);

        return $produto;
    }

    /**
     * @depends testSetDescricao
     *
     * @param Produto $produto
     */
    public function testRetornString(Produto $produto)
    {
        $this->assertInternalType('string', $produto->__toString());
        $this->assertContains('Chocolate', $produto->__toString());
        $this->assertContains('100', $produto->__toString());
        $this->assertContains('Chocolate branco', $produto->__toString());
    }
}
