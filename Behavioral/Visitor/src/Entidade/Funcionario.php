<?php

declare(strict_types=1);

namespace App\Entidade;

use App\Visitor\Visitor;

class Funcionario implements EntidadeInterface
{
    /** @var string */
    private $nome;

    /** @var string */
    private $cargo;

    /** @var float */
    private $salario;

    /**
     * Funcionario constructor.
     * @param string $nome
     * @param string $cargo
     * @param float $salario
     */
    public function __construct(string $nome, string $cargo, float $salario)
    {
        $this->nome    = $nome;
        $this->cargo   = $cargo;
        $this->salario = $salario;
    }

    /**
     * Retorna o nome do funcionario
     *
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Retorna o nome do cargo
     *
     * @return string
     */
    public function getCargo(): string
    {
        return $this->cargo;
    }

    /**
     * Retorna o salário do funcionario
     *
     * @return float
     */
    public function getSalario(): float
    {
        return $this->salario;
    }

    /**
     * Método que utiliza um Visitor
     *
     * @param Visitor $visitor
     * @return string
     */
    public function accept(Visitor $visitor): string
    {
        return $visitor->visitFuncionario($this);
    }
}
