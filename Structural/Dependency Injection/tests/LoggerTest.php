<?php

declare(strict_types=1);

namespace Tests;

use App\Logger;
use PHPUnit\Framework\TestCase;

class LoggerTest extends TestCase
{
    /**
     * Teste debug
     */
    public function testRetornaAMensagemComoUmDebug()
    {
        $log = new Logger();

        $this->assertInternalType("string", $log->debug('Teste'));
        $this->assertContains('Teste', $log->debug('Teste'));
        $this->assertContains('Debug', $log->debug('Teste'));
    }
}
