<?php

declare(strict_types=1);

namespace App\Entidade;

use App\Visitor\Visitor;

class Empresa implements EntidadeInterface
{
    /** @var string */
    private $nome;

    /** @var array */
    private $departamentos;

    /**
     * Empresa constructor.
     * @param string $nome
     * @param array $departamentos
     */
    public function __construct(string $nome, array $departamentos)
    {
        $this->nome = $nome;
        $this->departamentos = $departamentos;
    }

    /**
     * Retorna o nome da Empresa
     *
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Retorna os departamentos da empresa
     *
     * @return array
     */
    public function getDepartamentos(): array
    {
        return $this->departamentos;
    }

    /**
     * Método que utiliza um Visitor
     *
     * @param Visitor $visitor
     * @return string
     */
    public function accept(Visitor $visitor): string
    {
        return $visitor->visitEmpresa($this);
    }
}
