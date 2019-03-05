<?php

declare(strict_types=1);

namespace Tests\Component;

use App\Component\Database;
use App\Mediator\MediatorInterface;
use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase
{
    /** @var Database */
    private $database;

    /** @var MediatorInterface */
    private $mediator;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->database = new Database();
        $this->mediator = $this->getMockBuilder(MediatorInterface::class)
            ->disableOriginalConstructor()
            ->setMethods(['notify'])
            ->getMock();
    }

    /**
     * Teste salvar
     *
     * @throws \Exception
     */
    public function testRetornaSucessoEDadosSalvosEmFormatoString()
    {
        $dados = [
            'nome'      => 'Gabriel Valim',
            'email'     => 'valim@email.com',
            'documento' => '10029738712'
        ];

        $this->database->setMediator($this->mediator);

        $this->mediator->method('notify')
            ->willReturn("E-mail enviado com sucesso");

        $resultado = $this->database->salvar($dados);

        $this->assertInternalType("string", $resultado);
        $this->assertContains("E-mail enviado com sucesso", $resultado);
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage Dados estão vazios
     *
     * @throws \Exception
     */
    public function testLancaExcessaoSeDadosEstiveremVazios()
    {
        $this->database->salvar([]);
    }
}
