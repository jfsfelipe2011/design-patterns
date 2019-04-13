<?php

declare(strict_types=1);

namespace Tests;

use App\LivroPHPPrototype;
use PHPUnit\Framework\TestCase;

class LivroPHPPrototypeTest extends TestCase
{
    const CATEGORIA_LIVRO = 'Programação';

    const TIPO_LIVRO = 'PHP';

    const TITULO_LIVRO = 'OReilly Learning PHP 5';

    /** @var LivroPHPPrototype */
    private $prototype;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->prototype = new LivroPHPPrototype(
            self::CATEGORIA_LIVRO,
            self::TIPO_LIVRO,
            self::TITULO_LIVRO
        );
    }

    /**
     * Teste getDescricao
     */
    public function testDescricaoContemCategoriaTipoTituloEmString()
    {
        $descricao = $this->prototype->getDescricao();

        $this->assertInternalType('string', $descricao);
        $this->assertContains(self::TITULO_LIVRO, $descricao);
        $this->assertContains(self::TIPO_LIVRO, $descricao);
        $this->assertContains(self::CATEGORIA_LIVRO, $descricao);
    }

    /**
     * Teste clone
     */
    public function testGeraUmNovoObjetoAoClonar()
    {
        $clone = clone $this->prototype;
        $clone->setTitulo('PHP & MySQL Everyday Apps for Dummies');

        $descricao = $clone->getDescricao();

        $this->assertInternalType('string', $descricao);
        $this->assertContains('PHP & MySQL Everyday Apps for Dummies', $descricao);
        $this->assertContains(self::TIPO_LIVRO, $descricao);
        $this->assertContains(self::CATEGORIA_LIVRO, $descricao);
    }
}
