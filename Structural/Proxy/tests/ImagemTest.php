<?php

declare(strict_types=1);

namespace Tests;

use App\Imagem;
use PHPUnit\Framework\TestCase;

class ImagemTest extends TestCase
{
    public function testRetornaONomeDoArquivoQuandoMostraImagem()
    {
        $imagem = new Imagem("imagem.jpeg");

        $this->assertInternalType("string", $imagem->mostraImagem());
        $this->assertEquals("imagem.jpeg", $imagem->mostraImagem());
    }
}
