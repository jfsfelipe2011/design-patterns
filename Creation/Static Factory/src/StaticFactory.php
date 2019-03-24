<?php

declare(strict_types=1);

namespace App;

final class StaticFactory
{
    /**
     * Constroi um formatter
     *
     * @param string $tipo
     * @return FormatterInterface
     */
    public static function factory(string $tipo): FormatterInterface
    {
        if ($tipo === 'number') {
            return new NumberFormatter();
        } elseif ($tipo === 'string') {
            return new StringFormatter();
        }

        throw new \InvalidArgumentException('Tipo desconhecido');
    }
}
