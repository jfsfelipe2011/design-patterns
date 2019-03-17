<?php

declare(strict_types=1);

namespace App\Visitor;

use App\Entidade\Departamento;
use App\Entidade\Empresa;
use App\Entidade\Funcionario;

class SalarioReport implements Visitor
{

    /**
     * Método visita de Empresa
     *
     * @param Empresa $empresa
     * @return string
     */
    public function visitEmpresa(Empresa $empresa): string
    {
        $resultado = "Empresa: " . $empresa->getNome() . "<br><br>";

        /** @var Departamento $departamento */
        foreach ($empresa->getDepartamentos() as $departamento) {
            if (!$departamento instanceof $departamento) {
                continue;
            }

            $resultado .= $this->visitDepartamento($departamento);
        }

        return $resultado;
    }

    /**
     * Método visita de Departamento
     *
     * @param Departamento $departamento
     * @return string
     */
    public function visitDepartamento(Departamento $departamento): string
    {
        $resultado = "Departamento: " . $departamento->getNome() .
                   " Custo: " . $departamento->getCustos(). "<br><br>";

        /** @var Funcionario $funcionario */
        foreach ($departamento->getFuncionarios() as $funcionario) {
            if (!$funcionario instanceof Funcionario) {
                continue;
            }

            $resultado .= $this->visitFuncionario($funcionario);
        }

        $resultado .= "<br>";

        return $resultado;
    }

    /**
     * Método visita de Funcionario
     *
     * @param Funcionario $funcionario
     * @return string
     */
    public function visitFuncionario(Funcionario $funcionario): string
    {
        return "R$ " .
               number_format($funcionario->getSalario(), 2,',', "") . " " .
               $funcionario->getNome() . " (" .
               $funcionario->getCargo() . ")<br>";
    }
}
