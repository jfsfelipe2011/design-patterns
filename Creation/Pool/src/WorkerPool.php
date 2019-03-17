<?php

declare(strict_types=1);

namespace App;

class WorkerPool implements \Countable
{
    /** @var array */
    private $workersOcupados = [];

    /** @var array */
    private $workersLivres = [];

    /**
     * Busca um CaracterWorker, caso exista algum livre
     * retorna o mesmo, caso não gera um novo
     *
     * @return CaracterWorker
     */
    public function get(): CaracterWorker
    {
        if (count($this->workersLivres) === 0) {
            $worker = new CaracterWorker();
        } else {
            $worker = array_pop($this->workersLivres);
        }

        $this->workersOcupados[spl_object_hash($worker)] = $worker;

        return $worker;
    }

    /**
     * Passa um worker ocupado para livre
     *
     * @param CaracterWorker $worker
     */
    public function dispose(CaracterWorker $worker): void
    {
        $key = spl_object_hash($worker);

        if (isset($this->workersOcupados[$key])) {
            unset($this->workersOcupados[$key]);
            $this->workersLivres[$key] = $worker;
        }
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->workersOcupados) + count($this->workersLivres);
    }
}
