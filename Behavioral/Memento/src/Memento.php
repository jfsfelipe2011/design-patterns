<?php

declare(strict_types=1);

namespace App;

class Memento
{
    /** @var State */
    private $status;

    /**
     * Memento constructor.
     * @param State $status
     */
    public function __construct(State $status)
    {
        $this->status = $status;
    }

    /**
     * @return State
     */
    public function getStatus(): State
    {
        return $this->status;
    }
}
