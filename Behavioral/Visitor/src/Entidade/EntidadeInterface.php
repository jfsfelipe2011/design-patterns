<?php

declare(strict_types=1);

namespace App\Entidade;

use App\Visitor\Visitor;

interface EntidadeInterface
{
    /** Método que utiliza um Visitor */
    public function accept(Visitor $visitor): string;
}
