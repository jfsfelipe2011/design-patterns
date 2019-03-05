<?php

declare(strict_types=1);

namespace Tests;

use App\Memento;
use App\State;
use PHPUnit\Framework\TestCase;

class MementoTest extends TestCase
{
    /**
     * Teste getStatus
     */
    public function testRetornaUmObjetoState()
    {
        $state = new State(State::CRIADO);
        $memento = new Memento($state);

        $this->assertInternalType("object", $memento->getStatus());
        $this->assertInstanceOf(State::class, $memento->getStatus());
    }
}
