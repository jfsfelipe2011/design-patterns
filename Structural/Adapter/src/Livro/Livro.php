<?php

declare(strict_types=1);

namespace App\Livro;

class Livro implements LivroInterface
{
    /** @var int */
    private $pagina;

    /** @var int */
    private $totalPaginas;

    /**
     * Livro constructor.
     *
     * @param int $totalPaginas
     */
    public function __construct(int $totalPaginas = 1)
    {
        $this->totalPaginas = $totalPaginas;
        $this->pagina       = 0;
    }

    /**
     * Método que faz a abertura do Livro
     *
     * @throws \Exception
     */
    public function abreLivro(): void
    {
        if ($this->pagina !== 0) {
            throw new \Exception('Livro já está em aberto');
        }

        $this->pagina = 1;
    }

    /**
     * Método que vira a página do Livro
     *
     * @throws \Exception
     */
    public function viraPagina(): void
    {
        if ($this->pagina === 0) {
            throw new \Exception('O Livro não está aberto');
        }

        if ($this->pagina === $this->totalPaginas) {
            throw new \Exception('Você está no final do livro');
        }

        $this->pagina++;
    }

    /**
     * Método que volta para a página anterior do Livro
     *
     * @throws \Exception
     */
    public function voltaPaginaAnterior(): void
    {
        if ($this->pagina === 0) {
            throw new \Exception('O Livro não está aberto');
        }

        if ($this->pagina === 1) {
            throw new \Exception('Você está no inicio do livro');
        }

        $this->pagina--;
    }

    /**
     * Método que retorna a página atual do livro
     *
     * @return int
     * @throws \Exception
     */
    public function getPaginaAtual(): int
    {
        if ($this->pagina === 0) {
            throw new \Exception('O Livro não está aberto');
        }

        return $this->pagina;
    }

    /**
     * Método que fecha um livro
     */
    public function fechaLivro(): void
    {
        $this->pagina = 0;
    }
}
