<?php

declare(strict_types=1);

namespace Tests\Servicos;

use App\Servicos\Mail;
use App\Servicos\ServiceInterface;
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

    public function testReturnString()
    {
        $this->expectOutputString('Serviço de E-mail');

        echo $this->mail;
    }

    public function testImplementsInterface()
    {
        $this->assertInstanceOf(ServiceInterface::class, $this->mail);
    }
}
