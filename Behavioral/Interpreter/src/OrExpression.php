<?php

declare(strict_types=1);

namespace App;

class OrExpression implements Expression
{
    /** @var Expression */
    private $expr1;

    /** @var Expression */
    private $expr2;

    /**
     * OrExpression constructor.
     * @param Expression $expr1
     * @param Expression $expr2
     */
    public function __construct(Expression $expr1, Expression $expr2)
    {
        $this->expr1 = $expr1;
        $this->expr2 = $expr2;
    }

    /**
     * Método que interpreta uma palavra dentro da expressão
     *
     * @param string $palavra
     * @return bool
     */
    public function interpreter(string $palavra): bool
    {
        return $this->expr1->interpreter($palavra) || $this->expr2->interpreter($palavra);
    }
}
