<?php

declare(strict_types=1);

namespace Tests\Visitor;

use App\Entidade\Departamento;
use App\Entidade\Empresa;
use App\Entidade\Funcionario;
use App\Visitor\SalarioReport;
use PHPUnit\Framework\TestCase;

class SalarioReportTest extends TestCase
{
    /** @var SalarioReport */
    private $report;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->report = new SalarioReport();
    }

    /**
     * Teste visitFuncionario
     */
    public function testFormataInformacoesDeFuncionarioEmUmaString()
    {
        $funcionario = new Funcionario('Amanda Silva', 'assistencia de RH', 1200.00);
        $retorno = $funcionario->accept($this->report);

        $this->assertInternalType("string", $retorno);
        $this->assertContains('Amanda Silva', $retorno);
        $this->assertContains('assistencia de RH', $retorno);
        $this->assertContains('1200,00', $retorno);
    }

    /**
     * Teste visitDepartamento
     */
    public function testFormataInformacoesDeDepartamentoEmUmaString()
    {
        $departamento = new Departamento(
            'Recursos Humanos',
            [
                new Funcionario('Amanda Silva', 'assistencia de RH', 1200.00),
                new Funcionario('Carol Santos', 'recrutadora', 2000.00),
                new Funcionario('Manuela Costa', 'gerente de RH', 3200.00)
            ]
        );

        $retorno = $departamento->accept($this->report);

        $this->assertInternalType("string", $retorno);
        $this->assertContains("Amanda Silva", $retorno);
        $this->assertContains("Carol Santos", $retorno);
        $this->assertContains("Manuela Costa", $retorno);
        $this->assertContains("Recursos Humanos", $retorno);
    }

    public function testFormataInformacoesDeEmpresaEmUmaString()
    {
        $rh = new Departamento(
            'Recursos Humanos',
            [
                new Funcionario('Amanda Silva', 'assistencia de RH', 1200.00),
                new Funcionario('Carol Santos', 'recrutadora', 2000.00),
                new Funcionario('Manuela Costa', 'gerente de RH', 3200.00)
            ]
        );

        $dp = new Departamento(
            'Departamento Pessoal',
            [
                new Funcionario('Carlos Ambrosio', 'assistencia de DP', 1500.00),
                new Funcionario('Helio Santos', 'gerente de DP', 4000.00)
            ]
        );

        $empresa = new Empresa('Trustee Corp', [$rh, $dp]);

        $retorno = $empresa->accept($this->report);

        $this->assertInternalType("string", $retorno);
        $this->assertContains("Amanda Silva", $retorno);
        $this->assertContains("Carol Santos", $retorno);
        $this->assertContains("Manuela Costa", $retorno);
        $this->assertContains("Carlos Ambrosio", $retorno);
        $this->assertContains("Helio Santos", $retorno);
        $this->assertContains("Recursos Humanos", $retorno);
        $this->assertContains("Departamento Pessoal", $retorno);
        $this->assertContains("Trustee Corp", $retorno);
    }
}
