<?php

declare(strict_types=1);

namespace App\Component;

class Mail extends BaseComponent
{
    /**
     * @return string
     */
    public function enviaEmail(): string
    {
        return "E-mail enviado com sucesso";
    }
}
