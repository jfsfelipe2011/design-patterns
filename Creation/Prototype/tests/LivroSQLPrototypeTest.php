<?php

declare(strict_types=1);

namespace Tests;

use App\LivroSQLPrototype;
use PHPUnit\Framework\TestCase;

class LivroSQLPrototypeTest extends TestCase
{
    const CATEGORIA_LIVRO = 'Banco de Dados';

    const TIPO_LIVRO = 'SQL';

    const TITULO_LIVRO = 'SQL For Cats';

    /** @var LivroSQLPrototype */
    private $prototype;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->prototype = new LivroSQLPrototype(
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
        $clone->setTitulo('OReilly Learning SQL');

        $descricao = $clone->getDescricao();

        $this->assertInternalType('string', $descricao);
        $this->assertContains('OReilly Learning SQL', $descricao);
        $this->assertContains(self::TIPO_LIVRO, $descricao);
        $this->assertContains(self::CATEGORIA_LIVRO, $descricao);
    }
}
