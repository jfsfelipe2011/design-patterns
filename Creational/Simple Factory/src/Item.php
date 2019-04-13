<?php

declare(strict_types=1);

namespace App;

class Item
{
    /** @var string */
    private $nome;

    /** @var int */
    private $quantidade;

    /** @var float */
    private $valor;

    /**
     * @param string $nome
     */
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @param int $quantidade
     */
    public function setQuantidade(int $quantidade): void
    {
        $this->quantidade = $quantidade;
    }

    /**
     * @param float $valor
     */
    public function setValor(float $valor): void
    {
        $this->valor = $valor;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->nome . " - R$ " . $this->valor . " / " . $this->quantidade;
    }
}
