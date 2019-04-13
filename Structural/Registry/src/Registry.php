<?php

declare(strict_types=1);

namespace App;

use App\Servicos\ServiceInterface;

class Registry
{
    /** @var array */
    const SERVICOS_PERMITIDOS = [
        'Mail',
        'Logger',
        'Connection'
    ];

    /** @var array */
    private $servicos = [];

    /**
     * @param string $nome
     * @param ServiceInterface $valor
     */
    public function set(string $nome, ServiceInterface $valor): void
    {
        if (!in_array($nome, self::SERVICOS_PERMITIDOS)) {
            throw new \InvalidArgumentException('Serviço não permitido');
        }

        $this->servicos[$nome] = $valor;
    }

    /**
     * @param string $nome
     * @return ServiceInterface
     */
    public function get(string $nome): ServiceInterface
    {
        if (!isset($this->servicos[$nome])) {
            throw new \InvalidArgumentException('Serviço não encontrado');
        }

        return $this->servicos[$nome];
    }
}
