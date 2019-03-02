<?php

declare(strict_types=1);

namespace App;

interface Handler
{
    /** Método que deve setar um Handler para ser o próximo */
    public function setNext(Handler $handler): Handler;

    /** Método que deve executar a ação do Handler */
    public function handle(string $request): string;
}
