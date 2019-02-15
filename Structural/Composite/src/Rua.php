<?php

declare(strict_types=1);

namespace App;

class Rua extends EnderecoComponent
{
    /** @var string */
    private $nome;

    /** @var array */
    private $components = [];

    /**
     * Rua constructor.
     * @param string $nome
     */
    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    /**
     * Adiciona um component a Rua
     *
     * @param EnderecoComponent $component
     */
    public function adicionar(EnderecoComponent $component): void
    {
        $this->components[] = $component;
    }

    /**
     * Remove um component de Rua
     *
     * @param string $nomeComponent
     * @throws \Exception
     */
    public function remover(string $nomeComponent): void
    {
        $this->getComponent($nomeComponent);
        $arrayTemp = [];

        foreach ($this->components as $comp) {
            if ($comp->__toString() !== $nomeComponent) {
                $arrayTemp[] = $comp;
            }
        }

        $this->components = $arrayTemp;
    }

    /**
     * Busca um component em Rua.
     *
     * @param string $nomeComponent
     * @return EnderecoComponent
     * @throws \Exception
     */
    public function getComponent(string $nomeComponent): EnderecoComponent
    {
        foreach ($this->components as $comp) {
            if ($comp->__toString() === $nomeComponent) {
                return $comp;
            }
        }

        throw new \Exception("Component não encontrado");
    }

    /**
     * Rua toString
     * @return string
     */
    public function __toString(): string
    {
        $result = "Rua " . $this->nome . "<br>";

        foreach ($this->components as $component) {
            $result .= $component . "<br>";
        }

        return $result;
    }
}
