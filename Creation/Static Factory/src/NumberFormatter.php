<?php

declare(strict_types=1);

namespace App;

class NumberFormatter implements FormatterInterface
{

    /**
     * Método que formata para Número
     *
     * @param $input
     * @return int
     */
    public function format($input)
    {
        $numero = 0;

        if (is_array($input)) {
            foreach ($input as $i) {
                $numero += $i;
            }
        } else {
            $numero = (float) $input;
        }

        return (float) number_format($numero, 2);
    }
}
