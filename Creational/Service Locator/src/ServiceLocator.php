<?php

declare(strict_types=1);

namespace App;

class ServiceLocator implements ServiceLocatorInterface
{
    /** @var array */
    private $servicos;

    /**
     * Método que adiciona um serviço
     *
     * @param string $classe
     * @param $servico
     */
    public function add(string $classe, $servico): void
    {
        $this->servicos[$classe] = $servico;
    }

    /**
     * Método que verifica um serviço
     *
     * @param string $classe
     * @return bool
     */
    public function has(string $classe): bool
    {
        return isset($this->servicos[$classe]);
    }

    /**
     * Método que retorna um serviço
     *
     * @param string $classe
     * @return bool|mixed
     */
    public function get(string $classe)
    {
        if (!$this->has($classe)) {
            return false;
        }

        return $this->servicos[$classe];
    }
}
