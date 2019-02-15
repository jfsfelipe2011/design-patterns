<?php

declare(strict_types=1);

namespace App;

class EnderecoComposite extends EnderecoComponent
{
    /** @var array */
    private $components = [];

    /**
     * Adiciona um component a Endereço
     *
     * @param EnderecoComponent $component
     */
    public function adicionar(EnderecoComponent $component): void
    {
        $this->components[] = $component;
    }

    /**
     * Remove um component de Endereço
     *
     * @param string $nomeComponent
     * @throws \Exception
     */
    public function remover(string $nomeComponent): void
    {
        $this->getComponent($nomeComponent);
        $arrayTemp = [];

        foreach ($this->components as $comp) {
            if (strpos($comp->__toString(), $nomeComponent) === false) {
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
            if (strpos($comp->__toString(), $nomeComponent) !== false) {
                return $comp;
            }
        }

        throw new \Exception("Component não encontrado");
    }

    /**
     * EnderecoComposite toString
     * @return string
     */
    public function __toString(): string
    {
        $result = "Endereço: <br>";

        foreach ($this->components as $component) {
            $result .= '  ' . $component . "<br>";
        }

        return $result;
    }
}
