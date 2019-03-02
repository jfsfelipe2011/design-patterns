<?php

declare(strict_types=1);

namespace Tests\Command;

use App\Command\EmailCommand;
use App\Mail\Mail;
use PHPUnit\Framework\TestCase;

class EmailCommandTest extends TestCase
{
    /** @var Mail */
    private $mail;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->mail = new Mail();
    }

    /**
     * Teste execute
     *
     * @throws \Exception
     */
    public function testRetornaMensagemDeSucessoAoInformarToEFrom()
    {
        $command = new EmailCommand($this->mail, "to@email.com", "from@email.com");
        $resultado = $command->execute();

        $this->assertInternalType("string", $resultado);
        $this->assertContains("E-mail enviado com sucesso", $resultado);
        $this->assertContains("to@email.com", $resultado);
        $this->assertContains("from@email.com", $resultado);
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage Informe um destinatário e um remetente
     *
     * @throws \Exception
     */
    public function testLancaExcecaoCasoNaoInformadoTo()
    {
        $command = new EmailCommand($this->mail, "", "from@email.com");
        $command->execute();
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage Informe um destinatário e um remetente
     *
     * @throws \Exception
     */
    public function testLancaExcecaoCasoNaoInformadoFrom()
    {
        $command = new EmailCommand($this->mail, "to@email.com", "");
        $command->execute();
    }
}
