<?php

declare(strict_types=1);

namespace App;

class CaracterFlyweight implements FlyweightInterface
{
    /** @var string */
    private $nome;

    /**
     * CaracterFlyweight constructor.
     * @param string $nome
     */
    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    /**
     * Método que faz a renderização
     *
     * @param string $fonte
     * @return string
     */
    public function renderiza(string $fonte): string
    {
        return sprintf('Caracter %s renderizado com a fonte %s', $this->nome, $fonte);
    }
}
