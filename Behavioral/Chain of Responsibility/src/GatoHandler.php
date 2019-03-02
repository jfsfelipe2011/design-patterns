<?php

declare(strict_types=1);

namespace App;

class GatoHandler extends AbstractHandler
{
    public function handle(string $request): string
    {
        if ($request === "Peixe") {
            return sprintf("Gato: Eu quero comer o %s.", $request);
        }

        return parent::handle($request);
    }
}
