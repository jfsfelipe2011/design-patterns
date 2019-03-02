<?php

declare(strict_types=1);

namespace Tests;

use App\ImagemProxy;
use PHPUnit\Framework\TestCase;

class ImagemProxyTest extends TestCase
{
    /** @var ImagemProxy */
    private $imagem;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->imagem = new ImagemProxy("foto.png");
    }

    /**
     * Teste getNomeArquivo
     */
    public function testRetornaONomeDaImagem()
    {
        $this->assertInternalType("string", $this->imagem->getNomeArquivo());
        $this->assertEquals("foto.png", $this->imagem->getNomeArquivo());
    }

    /**
     * Teste mostraImagem
     */
    public function testCarregaAImagemRetornandoONome()
    {
        $this->assertInternalType("string", $this->imagem->mostraImagem());
        $this->assertEquals("foto.png", $this->imagem->mostraImagem());
    }
}
