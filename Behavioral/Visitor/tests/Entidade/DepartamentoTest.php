<?php

declare(strict_types=1);

namespace Tests\Entidade;

use App\Entidade\Departamento;
use App\Entidade\Funcionario;
use App\Visitor\Visitor;
use PHPUnit\Framework\TestCase;

class DepartamentoTest extends TestCase
{
    /** @var Departamento */
    private $departamento;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->departamento = new Departamento(
            'Desenvolvimento',
            [
                new Funcionario('Catia', 'desenvolvedor', 1500.00),
                new Funcionario('Luan', 'designer', 2000.00),
                new Funcionario('Kelly', 'UX', 2300.00)
            ]
        );
    }

    /**
     * Teste getNome
     */
    public function testRetornaStringNoNomeDoDepartamento()
    {
        $this->assertInternalType("string", $this->departamento->getNome());
        $this->assertEquals("Desenvolvimento", $this->departamento->getNome());
    }

    /**
     * Teste getFuncionarios
     */
    public function testRetornaUmArrayDeFuncionarios()
    {
        $this->assertInternalType("array", $this->departamento->getFuncionarios());
    }

    /**
     * Teste getCustos
     */
    public function testRetornaOValorDaSomaDosSalariosDosFuncionariosDoDepartamento()
    {
        $this->assertInternalType("float", $this->departamento->getCustos());
        $this->assertEquals(5800.00, $this->departamento->getCustos());
    }

    /**
     * Teste getCustos
     */
    public function testRetornaSomaDosSalariosSeDeFatoForUmObjetoFuncionario()
    {
        $departamento = new Departamento(
            'Compras',
            [
                new Funcionario('Igor', 'assistente de compras', 1500.00),
                'Marta', 'assistente de compras', 1500.00
            ]
        );

        $this->assertInternalType("float", $departamento->getCustos());
        $this->assertEquals(1500.00, $departamento->getCustos());
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

        $visitor->method("visitDepartamento")
            ->willReturn("Desenvolvimento - Funcionários");

        $retorno = $this->departamento->accept($visitor);

        $this->assertInternalType("string", $retorno);
        $this->assertEquals("Desenvolvimento - Funcionários", $retorno);
    }
}
