<?php

declare(strict_types=1);

namespace Tests\Entidade;

use App\Entidade\Departamento;
use App\Entidade\Empresa;
use App\Entidade\Funcionario;
use App\Visitor\Visitor;
use PHPUnit\Framework\TestCase;

class EmpresaTest extends TestCase
{
    /** @var Empresa */
    private $empresa;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $desenvolvimento = new Departamento(
            'Desenvolvimento',
            [
                new Funcionario('Catia', 'desenvolvedor', 1500.00),
                new Funcionario('Luan', 'designer', 2000.00),
                new Funcionario('Kelly', 'UX', 2300.00)
            ]
        );

        $compras = new Departamento(
            'Compras',
            [
                new Funcionario('Igor', 'assistente de compras', 1500.00),
                new Funcionario('Marta', 'assistente de compras', 2000.00),
            ]
        );

        $this->empresa = new Empresa('Desenvolvedores Máximo', [
            $desenvolvimento,
            $compras
        ]);
    }

    /**
     * Teste getNome
     */
    public function testRetornaStringNoNomeDaEmpresa()
    {
        $this->assertInternalType("string", $this->empresa->getNome());
        $this->assertEquals("Desenvolvedores Máximo", $this->empresa->getNome());
    }

    /**
     * Teste getDepartamentos
     */
    public function testRetornaUmArrayDeDepartamentos()
    {
        $this->assertInternalType("array", $this->empresa->getDepartamentos());
    }

    /**
     * Teste accept
     */
    public function testRetornaUmaStringNoVisitor()
    {
        $visitor = $this->getMockBuilder(Visitor::class)
            ->disableOriginalConstructor()
            ->setMethods(["visitFuncionario", "visitEmpresa", "visitDepartamento"])
            ->getMock();

        $visitor->method("visitEmpresa")
            ->willReturn("Empresa Desenvolvedores Máximo");

        $retorno = $this->empresa->accept($visitor);

        $this->assertInternalType("string", $retorno);
        $this->assertEquals("Empresa Desenvolvedores Máximo", $retorno);
    }
}
