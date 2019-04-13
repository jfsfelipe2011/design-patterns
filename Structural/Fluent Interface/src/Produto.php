<?php

declare(strict_types=1);

namespace App;

final class Produto
{
    /** @var string */
    private $nome;

    /** @var float */
    private $valor;

    /** @var string */
    private $descricao;

    /**
     * @param string $nome
     * @return Produto
     */
    public function setNome(string $nome): Produto
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @param float $valor
     * @return Produto
     */
    public function setValor(float $valor): Produto
    {
        $this->valor = $valor;
        return $this;
    }

    /**
     * @param string $descricao
     * @return Produto
     */
    public function setDescricao(string $descricao): Produto
    {
        $this->descricao = $descricao;
        return $this;
    }

    public function __toString(): string
    {
        return sprintf("Produto: %s - R$ %s - %s",
            $this->nome, $this->valor, $this->descricao);
    }
}
