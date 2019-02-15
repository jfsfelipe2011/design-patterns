<?php

declare(strict_types=1);

namespace App;

class Bairro extends EnderecoComponent
{
    /** @var string */
    private $nome;

    /** @var string */
    private $cidade;

    /** @var string */
    private $estado;

    /**
     * Bairro constructor.
     * @param string $nome
     * @param string $cidade
     * @param string $estado
     */
    public function __construct(string $nome, string $cidade, string $estado)
    {
        $this->nome = $nome;
        $this->cidade = $cidade;
        $this->estado = $estado;
    }

    /**
     * Bairro toString
     * @return string
     */
    public function __toString(): string
    {
        return "Bairro {$this->nome} - {$this->cidade} / {$this->estado}";
    }
}