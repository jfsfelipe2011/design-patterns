<?php

declare(strict_types=1);

namespace Tests\Logger;

use App\Logger\LogService;
use PHPUnit\Framework\TestCase;

class LogServiceTest extends TestCase
{
    /**
     * Teste debug
     */
    public function testRetornaUmaMensagemEmFormatoString()
    {
        $logger = new LogService();

        $this->assertInternalType("string", $logger->debug("Teste"));
        $this->assertEquals("DEBUG: Teste", $logger->debug("Teste"));
    }
}
