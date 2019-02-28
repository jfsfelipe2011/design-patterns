<?php

declare(strict_types=1);

namespace App\SistemaOperacional;

class SistemaOperacional implements SistemaOperacionalInterface
{
    /** @var string */
    private $nome;

    /**
     * SistemaOperacional constructor.
     * @param string $nome
     */
    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    /**
     * Método que informa a parada do sistema
     *
     * @return string
     */
    public function parada(): string
    {
        return "Sistema operacional " . $this->getNome() . " parado.";
    }

    /**
     * Método que retorna o nome do sistema
     *
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }
}
