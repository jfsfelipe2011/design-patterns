<?php

declare(strict_types=1);

namespace App;

class LivroIterator implements \Iterator
{
    /** @var LivroCollection */
    private $colecao;

    /** @var int */
    private $posicao = 0;

    /** @var bool */
    private $reverso;

    /**
     * LivroIterator constructor.
     * @param \IteratorAggregate $colecao
     * @param bool $reverso
     */
    public function __construct(\IteratorAggregate $colecao, $reverso = false)
    {
        $this->colecao = $colecao;
        $this->reverso = $reverso;
    }

    /**
     * Retorna o item atual
     *
     * @return mixed.
     */
    public function current()
    {
        return $this->colecao->getItens()[$this->posicao];
    }

    /**
     * Move para o proximo item
     *
     * @return void
     */
    public function next()
    {
        $this->posicao = $this->posicao + ($this->reverso ? -1 : 1);
    }

    /**
     * Retorna a posição atual
     *
     * @return mixed scalar
     */
    public function key()
    {
        return $this->posicao;
    }

    /**
     * Verifica a se a posição existe
     *
     * @return boolean
     */
    public function valid()
    {
        return isset($this->colecao->getItens()[$this->posicao]);
    }

    /**
     * Volta ao primeiro item do iterator
     *
     * @return void
     */
    public function rewind()
    {
        $this->posicao = $this->reverso ? count($this->colecao->getItens()) - 1 : 0;
    }
}
