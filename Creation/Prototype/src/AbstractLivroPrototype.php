<?php

declare(strict_types=1);

namespace App;

abstract class AbstractLivroPrototype
{
    /** @var string */
    protected $categoria;

    /** @var string */
    protected $tipo;

    /** @var string */
    protected $titulo;

    /** Método que deve clonar um Livro */
    abstract public function __clone();

    /**
     * Altera um titulo
     *
     * @param string $titulo
     */
    public function setTitulo(string $titulo): void
    {
        $this->titulo = $titulo;
    }

    /**
     * Método que retorna a descrição de um Livro
     *
     * @return string
     */
    public function getDescricao(): string
    {
        return "{$this->titulo} - {$this->tipo} - {$this->categoria}";
    }
}
