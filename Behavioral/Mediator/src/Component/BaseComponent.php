<?php

declare(strict_types=1);

namespace App\Component;

use App\Mediator\MediatorInterface;

abstract class BaseComponent
{
    /** @var MediatorInterface */
    protected $mediator;

    /**
     * Método que seta um mediador
     *
     * @param MediatorInterface $mediator
     */
    public function setMediator(MediatorInterface $mediator): void
    {
        $this->mediator = $mediator;
    }
}
