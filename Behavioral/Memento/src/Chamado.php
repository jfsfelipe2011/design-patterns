<?php

declare(strict_types=1);

namespace App;

class Chamado
{
    /** @var State  */
    private $statusAtual;

    /**
     * Chamado constructor.
     */
    public function __construct()
    {
        $this->statusAtual = new State(State::CRIADO);
    }

    /**
     * Seta status aberto
     */
    public function abrir():void
    {
        $this->statusAtual = new State(State::ABERTO);
    }

    /**
     * Seta status fechado
     */
    public function fechar(): void
    {
        $this->statusAtual = new State(State::FECHADO);
    }

    /**
     * Salva o status atual
     *
     * @return Memento
     */
    public function salvaMemento(): Memento
    {
        return new Memento(clone $this->statusAtual);
    }

    /**
     * Restaura status salvo
     *
     * @param Memento $memento
     */
    public function restoraStatus(Memento $memento): void
    {
        $this->statusAtual = $memento->getStatus();
    }

    /**
     * @return State
     */
    public function getStatus(): State
    {
        return $this->statusAtual;
    }
}
