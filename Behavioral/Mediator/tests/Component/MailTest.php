<?php

declare(strict_types=1);

namespace Tests\Component;

use App\Component\Mail;
use PHPUnit\Framework\TestCase;

class MailTest extends TestCase
{
    /**
     * Teste enviaEmail
     */
    public function testRetornaSucessoComoStringAEnviarEmail()
    {
        $mail = new Mail();

        $this->assertInternalType("string", $mail->enviaEmail());
        $this->assertEquals("E-mail enviado com sucesso", $mail->enviaEmail());
    }
}
