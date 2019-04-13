<?php

declare(strict_types=1);

namespace Tests\Servicos;

use App\Servicos\Logger;
use App\Servicos\ServiceInterface;
use PHPUnit\Framework\TestCase;

class LoggerTest extends TestCase
{
    /** @var Logger */
    private $logger;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->logger = new Logger();
    }

    public function testReturnString()
    {
        $this->expectOutputString('Serviço de Logs');

        echo $this->logger;
    }

    public function testImplementsInterface()
    {
        $this->assertInstanceOf(ServiceInterface::class, $this->logger);
    }
}
