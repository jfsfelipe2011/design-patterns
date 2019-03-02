<?php

declare(strict_types=1);

namespace App;

class Imagem implements ImagemInterface
{
    /** @var string */
    private $nomeArquivo;

    /**
     * Image constructor.
     * @param string $nomeArquivo
     */
    public function __construct(string $nomeArquivo)
    {
        $this->nomeArquivo = $nomeArquivo;
        $this->salvaImagem();
    }

    /**
     * Método que mostra uma imagem
     *
     * @return string
     */
    public function mostraImagem(): string
    {
        return $this->carregaImagem();
    }

    /**
     * Método que salva imagem no disco
     *
     * @return bool
     */
    private function salvaImagem(): bool
    {
        // Imagem salva com sucesso
        return true;
    }

    /**
     * Método que carrega a imagem
     *
     * @return string
     */
    private function carregaImagem(): string
    {
        return $this->nomeArquivo;
    }
}
