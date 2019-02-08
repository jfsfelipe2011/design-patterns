<?php

declare(strict_types=1);

namespace App\Veiculo;

use App\Parte\ParteInterface;

abstract class Veiculo
{
    /** @var array */
    private $partes = array();

    /**
     * Agrupa as partes de um Veiculo
     *
     * @param string $chave
     * @param string $valor
     */
    public function setPartes(string $chave, ParteInterface $valor): void
    {
        $this->partes[$chave] = $valor;
    }

    /**
     * Veiculo toString
     *
     * @return string
     */
    public function __toString(): string
    {
        $result = '';

        foreach ($this->partes as $chave => $parte)
        {
            $result .= $chave . ': ' . $parte . "<br>";
        }

        return $result;
    }
}
