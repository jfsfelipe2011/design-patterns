<?php

declare(strict_types=1);

namespace App;

class StringFormatter implements FormatterInterface
{

    /**
     * Método que formata para String
     *
     * @param $input
     * @return string
     */
    public function format($input)
    {
        $result = '';

        if (is_array($input)) {
            foreach ($input as $i) {
                $result .= sprintf(' %s', $i);
            }
        } else {
            $result = sprintf('%s', $input);
        }

        return $result;
    }
}
