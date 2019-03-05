<?php

declare(strict_types=1);

namespace Tests;

use App\Chamado;
use App\Memento;
use App\State;
use PHPUnit\Framework\TestCase;

class ChamadoTest extends TestCase
{
    /**
     * Teste construct, abrir e fechar
     */
    public function testTrocaOsStatusConformeOsMetodos()
    {
        $chamado = new Chamado();

        $this->assertInternalType("string", $chamado->getStatus()->__toString());
        $this->assertInstanceOf(State::class, $chamado->getStatus());
        $this->assertEquals(State::CRIADO, $chamado->getStatus()->__toString());

        $chamado->abrir();

        $this->assertInternalType("string", $chamado->getStatus()->__toString());
        $this->assertInstanceOf(State::class, $chamado->getStatus());
        $this->assertEquals(State::ABERTO, $chamado->getStatus()->__toString());

        $chamado->fechar();

        $this->assertInternalType("string", $chamado->getStatus()->__toString());
        $this->assertInstanceOf(State::class, $chamado->getStatus());
        $this->assertEquals(State::FECHADO, $chamado->getStatus()->__toString());
    }

    /**
     * Teste salvaMemento e restoraStatus
     */
    public function testRetornaOStatusAoInformadoNoObjetoMemento()
    {
        $chamado = new Chamado();

        /** @var Memento $memento */
        $memento = $chamado->salvaMemento();

        $this->assertInternalType("string", $memento->getStatus()->__toString());
        $this->assertInstanceOf(State::class, $memento->getStatus());
        $this->assertEquals(State::CRIADO, $memento->getStatus()->__toString());

        $chamado->fechar();

        $this->assertInternalType("string", $chamado->getStatus()->__toString());
        $this->assertInstanceOf(State::class, $chamado->getStatus());
        $this->assertEquals(State::FECHADO, $chamado->getStatus()->__toString());

        $memento2 = $chamado->salvaMemento();

        $this->assertInternalType("string", $memento2->getStatus()->__toString());
        $this->assertInstanceOf(State::class, $memento2->getStatus());
        $this->assertEquals(State::FECHADO, $memento2->getStatus()->__toString());

        $chamado->restoraStatus($memento);

        $this->assertInternalType("string", $chamado->getStatus()->__toString());
        $this->assertInstanceOf(State::class, $chamado->getStatus());
        $this->assertEquals(State::CRIADO, $chamado->getStatus()->__toString());
    }
}
