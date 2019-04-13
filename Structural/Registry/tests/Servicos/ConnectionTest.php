<?php

declare(strict_types=1);

namespace Tests\Servicos;

use App\Servicos\Connection;
use App\Servicos\ServiceInterface;
use PHPUnit\Framework\TestCase;

class ConnectionTest extends TestCase
{
    /** @var Connection */
    private $connection;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->connection = new Connection;
    }

    public function testReturnString()
    {
        $this->expectOutputString('Serviço de Conexão de Banco de Dados');

        echo $this->connection;
    }

    public function testImplementsInterface()
    {
        $this->assertInstanceOf(ServiceInterface::class, $this->connection);
    }
}
