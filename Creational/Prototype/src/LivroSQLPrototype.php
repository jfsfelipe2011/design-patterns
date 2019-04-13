<?php

declare(strict_types=1);

namespace App;

class LivroSQLPrototype extends AbstractLivroPrototype
{
    /**
     * LivroSQLPrototype constructor.
     * @param string $categoria
     * @param string $tipo
     * @param string $titulo
     */
    public function __construct(string $categoria, string $tipo, string $titulo)
    {
        $this->categoria = $categoria;
        $this->tipo = $tipo;
        $this->titulo = $titulo;
    }


    /** Método que clona um Livro */
    public function __clone()
    {

    }

}
