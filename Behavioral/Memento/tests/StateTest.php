<?php

declare(strict_types=1);

namespace Tests;

use App\State;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
    /**
     * Teste toString
     */
    public function testRetornaOStatusNoFormatoStringSeValido()
    {
        $status = new State(State::CRIADO);

        $this->assertInternalType("string", $status->__toString());
        $this->assertEquals(State::CRIADO, $status->__toString());

        $status = new State(State::ABERTO);

        $this->assertInternalType("string", $status->__toString());
        $this->assertEquals(State::ABERTO, $status->__toString());

        $status = new State(State::FECHADO);

        $this->assertInternalType("string", $status->__toString());
        $this->assertEquals(State::FECHADO, $status->__toString());
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Status inválido
     */
    public function testLancaExcessaoCasoSejaStatusInvalido()
    {
        new State("Em aberto");
    }
}
