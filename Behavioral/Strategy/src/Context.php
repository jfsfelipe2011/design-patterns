<?php

declare(strict_types=1);

namespace App;

use App\Strategy\Strategy;

class Context
{
    /** @var Strategy */
    private $strategy;

    /**
     * Context constructor.
     * @param Strategy $strategy
     */
    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * Seta um novo Strategy
     *
     * @param Strategy $strategy
     */
    public function setStrategy(Strategy $strategy): void
    {
        $this->strategy = $strategy;
    }

    /**
     * Retorna um array ordenado
     *
     * @param array $data
     * @return array
     */
    public function retornaArray(array $data): array
    {
        return $this->strategy->algoritmo($data);
    }
}
