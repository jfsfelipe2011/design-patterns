<?php

declare(strict_types=1);

namespace App;

interface FormatterInterface
{
    /** Método que deve fazer algum tipo formatação */
    public function format($input);
}
