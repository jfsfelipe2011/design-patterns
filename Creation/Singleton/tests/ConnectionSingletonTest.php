<?php

declare(strict_types=1);

namespace Tests;

use App\ConnectionSingleton;
use PHPUnit\Framework\TestCase;

class ConnectionSingletonTest extends TestCase
{
    /**
     * Teste getInstance
     */
    public function testInstanciaUnicaQuandoChamadoGetInstance()
    {
        $instanciaUm   = ConnectionSingleton::getInstance();
        $instanciaDois = ConnectionSingleton::getInstance();

        $this->assertInstanceOf(ConnectionSingleton::class, $instanciaUm);
        $this->assertInstanceOf(ConnectionSingleton::class, $instanciaDois);
        $this->assertSame($instanciaDois, $instanciaUm);
    }

    /**
     * Teste getConnection
     */
    public function testRetornaUmPDOAoBuscarUmaConexao()
    {
        $singleton = ConnectionSingleton::getInstance();

        $this->assertInstanceOf(\PDO::class, $singleton->getConnection());
    }
}
