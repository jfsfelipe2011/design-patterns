<?php

declare(strict_types=1);

namespace Tests\Parte;

use App\Parte\Motor;
use PHPUnit\Framework\TestCase;

class MotorTest extends TestCase
{
    /** @var string  */
    const NOME_MOTOR = 'Motor 1.4';

    /** @var Motor */
    private $motor;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->motor = new Motor(self::NOME_MOTOR);
    }

    /**
     * Testa __toString
     */
    public function testRetornaNomeEmFormatoStringNoMetodoToString()
    {
        $this->assertInternalType('string', $this->motor->__toString());
        $this->assertEquals(self::NOME_MOTOR, $this->motor->__toString());
    }
}