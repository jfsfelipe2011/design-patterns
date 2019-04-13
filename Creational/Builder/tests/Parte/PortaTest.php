<?php

declare(strict_types=1);

namespace Tests\Parte;

use App\Parte\Porta;
use PHPUnit\Framework\TestCase;

class PortaTest extends TestCase
{
    /** @var string  */
    const NOME_PORTA = 'Dianteira Direita';

    /** @var Porta */
    private $porta;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->porta = new Porta(self::NOME_PORTA);
    }

    /**
     * Testa __toString
     */
    public function testRetornaNomeEmFormatoStringNoMetodoToString()
    {
        $this->assertInternalType('string', $this->porta->__toString());
        $this->assertEquals(self::NOME_PORTA, $this->porta->__toString());
    }
}