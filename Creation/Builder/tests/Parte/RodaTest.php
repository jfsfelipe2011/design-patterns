<?php

declare(strict_types=1);

namespace Tests\Parte;

use App\Parte\Roda;
use PHPUnit\Framework\TestCase;

class RodaTest extends TestCase
{
    /** @var string  */
    const NOME_RODA = 'Dianteira Direita Aro 16';

    /** @var Roda */
    private $roda;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->roda = new Roda(self::NOME_RODA);
    }

    /**
     * Testa __toString
     */
    public function testRetornaNomeEmFormatoStringNoMetodoToString()
    {
        $this->assertInternalType('string', $this->roda->__toString());
        $this->assertEquals(self::NOME_RODA, $this->roda->__toString());
    }
}