<?php

declare(strict_types=1);

namespace App\Entidade;

use App\Visitor\Visitor;

class Departamento implements EntidadeInterface
{
    /** @var string */
    private $nome;

    /** @var array */
    private $funcionarios;

    /**
     * Departamento constructor.
     * @param string $nome
     * @param array $funcionarios
     */
    public function __construct(string $nome, array $funcionarios)
    {
        $this->nome = $nome;
        $this->funcionarios = $funcionarios;
    }

    /**
     * Retorna nome do Departamento
     *
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Retorna os funcionários do Departamento
     *
     * @return array
     */
    public function getFuncionarios(): array
    {
        return $this->funcionarios;
    }

    /**
     * Retorna a soma total dos salários dos funcionários
     *
     * @return float
     */
    public function getCustos(): float
    {
        $total = 0;

        /** @var Funcionario $funcionario */
        foreach ($this->funcionarios as $funcionario) {
            if (!$funcionario instanceof Funcionario) {
                continue;
            }

            $total += $funcionario->getSalario();
        }

        return $total;
    }

    /**
     * Método que utiliza um Visitor
     *
     * @param Visitor $visitor
     * @return string
     */
    public function accept(Visitor $visitor): string
    {
        return $visitor->visitDepartamento($this);
    }
}
