<?php

declare(strict_types=1);

namespace App;

class FlyweightFactory implements \Countable
{
    /** @var array */
    private $pool = [];

    /**
     * Método que retorna um caracter
     *
     * @param string $nome
     * @return CaracterFlyweight
     */
    public function get(string $nome): CaracterFlyweight
    {
        if (!isset($this->pool[$nome])) {
            $this->pool[$nome] = new CaracterFlyweight($nome);
        }

        return $this->pool[$nome];
    }

    /**
     * Retorna a quantidade de objetos na pool
     *
     * @return int
     */
    public function count(): int
    {
        return count($this->pool);
    }
}
