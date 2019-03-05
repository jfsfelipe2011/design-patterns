<?php

declare(strict_types=1);

namespace Tests\Mediator;

use App\Component\Database;
use App\Component\Mail;
use App\Mediator\ConcreteMediator;
use PHPUnit\Framework\TestCase;

class ConcreteMediatorTest extends TestCase
{
    /** @var Mail */
    private $mail;

    /** @var Database */
    private $database;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->mail     = new Mail();
        $this->database = new Database();
    }

    /**
     * Teste salvar
     *
     * @throws \Exception
     */
    public function testRetornaMensagemDeEnviadoComSucessoAoSalvarDados()
    {
        new ConcreteMediator($this->database, $this->mail);

        $resultado = $this->database->salvar([
            'nome'  => 'Suzana Alves',
            'email' => 'suzana@email.com'
        ]);

        $this->assertInternalType("string", $resultado);
        $this->assertContains("E-mail enviado com sucesso", $resultado);
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage Dados estão vazios
     *
     * @throws \Exception
     */
    public function testRetornaExecessaoCasoDadosVazios()
    {
        new ConcreteMediator($this->database, $this->mail);

        $this->database->salvar([]);
    }

    /**
     * Teste notify
     */
    public function testMensagemNaoImplementadoSeNaoExisteEvento()
    {
        $mediator = new ConcreteMediator($this->database, $this->mail);

        $resultado = $mediator->notify("SAVE");

        $this->assertInternalType("string", $resultado);
        $this->assertEquals("Não implementado", $resultado);
    }
}
