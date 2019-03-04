<?php

declare(strict_types=1);

namespace App;

use Traversable;

class LivroCollection implements \IteratorAggregate
{
    /** @var array */
    private $livros = [];

    /**
     * Método que retorna os livros
     *
     * @return array
     */
    public function getItens(): array
    {
        return $this->livros;
    }

    public function addItem(string $livro)
    {
        $this->livros[] = $livro;
    }
    /**
     * Retrieve an external iterator
     *
     * @return Traversable
     */
    public function getIterator(): \Iterator
    {
        return new LivroIterator($this);
    }

    /**
     * Retorna a ordem reversa do iterator
     *
     * @return \Iterator
     */
    public function getReverseIterator(): \Iterator
    {
        return new LivroIterator($this, true);
    }
}
