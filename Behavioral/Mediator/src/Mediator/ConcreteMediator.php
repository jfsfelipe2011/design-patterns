<?php

declare(strict_types=1);

namespace App\Mediator;

use App\Component\Database;
use App\Component\Mail;

class ConcreteMediator implements MediatorInterface
{
    /** @var Database */
    private $componente1;

    /** @var Mail */
    private $componente2;

    /**
     * ConcreteMediator constructor.
     * @param Database $componente1
     * @param Mail $componente2
     */
    public function __construct(Database $componente1, Mail $componente2)
    {
        $this->componente1 = $componente1;
        $this->componente2 = $componente2;

        $this->componente1->setMediator($this);
        $this->componente2->setMediator($this);
    }

    /** Método que deve fazer a notificação de e-mail */
    public function notify(string $event): string
    {
        if ($event === 'SEND') {
            return $this->componente2->enviaEmail();
        }

        return "Não implementado";
    }
}
