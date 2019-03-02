<?php

declare(strict_types=1);

namespace App;

class ImagemProxy implements ImagemInterface
{
    /** @var string */
    private $nomeArquivo;

    private $imagem;

    /**
     * ImagemProxy constructor.
     * @param string $nomeArquivo
     */
    public function __construct(string $nomeArquivo)
    {
        $this->nomeArquivo = $nomeArquivo;
    }

    /**
     * Método que mostra uma imagem
     *
     * @return string
     */
    public function mostraImagem(): string
    {
        if (!$this->imagem instanceof Imagem) {
            $this->imagem = new Imagem($this->nomeArquivo);
        }

        return $this->imagem->mostraImagem();
    }

    /**
     * Retorna nome do arquivo
     *
     * @return string
     */
    public function getNomeArquivo(): string
    {
        return $this->nomeArquivo;
    }
}
