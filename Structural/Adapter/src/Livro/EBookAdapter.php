<?php

declare(strict_types=1);

namespace App\Livro;

use App\EBook\EBookInterface;

class EBookAdapter implements LivroInterface
{
    /** @var EBookInterface */
    private $eBook;

    /**
     * EBookAdapter constructor.
     *
     * @param EBookInterface $eBook
     */
    public function __construct(EBookInterface $eBook)
    {
        $this->eBook = $eBook;
    }

    /**
     * Método que faz a abertura do Livro
     *
     * @throws \Exception
     */
    public function abreLivro(): void
    {
        $pagina = $this->eBook->getPage()[0];

        if ($pagina !== 0) {
            throw new \Exception('Livro já está em aberto');
        }

        $this->eBook->pressNext();
    }

    /**
     * Método que vira a página do Livro
     *
     * @throws \Exception
     */
    public function viraPagina(): void
    {
        $pagina = $this->eBook->getPage()[0];
        $totalPaginas = $this->eBook->getPage()[1];

        if ($pagina === 0) {
            throw new \Exception('Livro não está aberto');
        }

        if ($pagina === $totalPaginas) {
            throw new \Exception('Você está no final do livro');
        }

        $this->eBook->pressNext();
    }

    /**
     * Método que volta para a página anterior do Livro
     *
     * @throws \Exception
     */
    public function voltaPaginaAnterior(): void
    {
        $pagina = $this->eBook->getPage()[0];

        if ($pagina === 0) {
            throw new \Exception('Livro não está aberto');
        }

        if ($pagina === 1) {
            throw new \Exception('Você está no inicio do livro');
        }

        $this->eBook->pressPrevious();
    }

    /**
     * Método que retorna a página atual do livro
     *
     * @return int
     * @throws \Exception
     */
    public function getPaginaAtual(): int
    {
        $pagina = $this->eBook->getPage()[0];

        if ($pagina === 0) {
            throw new \Exception('Livro não está aberto');
        }

        return $this->eBook->getPage()[0];
    }

    /** Método que deve fechar um livro */
    public function fechaLivro(): void
    {
        while ($this->eBook->getPage()[0] !== 0) {
            $this->eBook->pressPrevious();
        }
    }
}
