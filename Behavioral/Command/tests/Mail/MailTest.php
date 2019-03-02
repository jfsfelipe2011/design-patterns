<?php

declare(strict_types=1);

namespace Tests\Mail;

use App\Mail\Mail;
use PHPUnit\Framework\TestCase;

class MailTest extends TestCase
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
     * Teste enviar
     *
     * @throws \Exception
     */
    public function testRetornaMensagemDeSucessoAoInformarToEFrom()
    {
        $resultado = $this->mail->enviar("to@email.com", "from@email.com");

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
        $this->mail->enviar("", "from@email.com");
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage Informe um destinatário e um remetente
     *
     * @throws \Exception
     */
    public function testLancaExcecaoCasoNaoInformadoFrom()
    {
        $this->mail->enviar("to@email.com", "");
    }
}
