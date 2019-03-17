<?php

declare(strict_types=1);

namespace Tests\Entidade;

use App\Entidade\Funcionario;
use App\Visitor\Visitor;
use PHPUnit\Framework\TestCase;

class FuncionarioTest extends TestCase
{
    /** @var Funcionario */
    private $funcionario;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->funcionario = new Funcionario(
            'Amanda Oliveira',
            'Desenvolvedor PHP',
            3000.00
        );
    }

    /**
     * Teste getNome
     */
    public function testRetornaStringNoNomeDoFuncionario()
    {
        $this->assertInternalType("string", $this->funcionario->getNome());
        $this->assertEquals("Amanda Oliveira", $this->funcionario->getNome());
    }

    /**
     * Teste getCargo
     */
    public function testRetornaStringNoCargoDoFuncionario()
    {
        $this->assertInternalType("string", $this->funcionario->getCargo());
        $this->assertEquals("Desenvolvedor PHP", $this->funcionario->getCargo());
    }

    /**
     * Teste getSalario
     */
    public function testRetornaFloatNoSalarioDoFuncionario()
    {
        $this->assertInternalType("float", $this->funcionario->getSalario());
        $this->assertEquals(3000.00, $this->funcionario->getSalario());
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

        $visitor->method("visitFuncionario")
            ->willReturn("R$ 3000.00 Amanda Oliveira (Desenvolvedor PHP)");

        $retorno = $this->funcionario->accept($visitor);

        $this->assertInternalType("string", $retorno);
        $this->assertEquals("R$ 3000.00 Amanda Oliveira (Desenvolvedor PHP)", $retorno);
    }
}
