<?php

declare(strict_types=1);

namespace App;

class TerminalExpression implements Expression
{
    /** @var string */
    private $expressao;

    /**
     * TerminalExpression constructor.
     * @param string $expressao
     */
    public function __construct(string $expressao)
    {
        $this->expressao = $expressao;
    }

    /**
     * Método que interpreta uma palavra dentro da expressão
     *
     * @param string $palavra
     * @return bool
     */
    public function interpreter(string $palavra): bool
    {
        if (strpos($this->expressao, $palavra) !== false) {
            return true;
        }

        return false;
    }
}
