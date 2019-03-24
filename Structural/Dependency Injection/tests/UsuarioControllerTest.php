<?php

declare(strict_types=1);

namespace Tests;

use App\Logger;
use App\UsuarioController;
use PHPUnit\Framework\TestCase;

class UsuarioControllerTest extends TestCase
{
    /**
     * Teste index
     */
    public function testRetornaUmaStringEGeraUmDebug()
    {
        $logger     = new Logger();
        $controller = new UsuarioController($logger);

        $response = $controller->index();

        $this->expectOutputString('Debug: Acessado página inicial');
        $this->assertInternalType("string", $response);
        $this->assertEquals("<br>Página inicial", $response);
    }
}
