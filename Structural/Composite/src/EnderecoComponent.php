<?php

declare(strict_types=1);

namespace App;

abstract class EnderecoComponent
{
    /**
     * @param EnderecoComponent $component
     * @throws \Exception
     */
    public function adicionar(EnderecoComponent $component): void
    {
        throw new \Exception("Não pode ser adicionado o component " . $component);
    }

    /**
     * @param string $nomeComponent
     * @throws \Exception
     */
    public function remover(string $nomeComponent): void
    {
        throw new \Exception("Não pode ser removido o component " . $nomeComponent);
    }

    /**
     * @param string $nomeComponent
     * @return EnderecoComponent
     * @throws \Exception
     */
    public function getComponent(string $nomeComponent): EnderecoComponent
    {
        throw new \Exception("Não pode ser encontrado o component " . $nomeComponent);
    }
}
