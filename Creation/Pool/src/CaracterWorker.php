<?php

declare(strict_types=1);

namespace App;

class CaracterWorker
{
    /**
     * Retorna um caracter aleatório
     *
     * @return string
     */
    public function process(): string
    {
        $charset = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";

        $seed = str_split($charset);
        shuffle($seed);

        return $seed[array_rand($seed, 1)];
    }
}
