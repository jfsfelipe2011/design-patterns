<?php

declare(strict_types=1);

namespace App\Mediator;

interface MediatorInterface
{
    /** Método que deve fazer a notificação de e-mail */
    public function notify(string $event): string;
}
