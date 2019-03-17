<?php

declare(strict_types=1);

namespace App\Visitor;

use App\Entidade\Departamento;
use App\Entidade\Empresa;
use App\Entidade\Funcionario;

interface Visitor
{
    /** Método visita de Empresa */
    public function visitEmpresa(Empresa $empresa): string;

    /** Método visita de Departamento */
    public function visitDepartamento(Departamento $departamento): string;

    /** Método visita de Funcionario */
    public function visitFuncionario(Funcionario $funcionario): string;
}
