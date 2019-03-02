<?php

declare(strict_types=1);

namespace App;

class CachorroHandler extends AbstractHandler
{
    public function handle(string $request): string
    {
        if ($request === "Osso") {
            return sprintf("Cachorro: Eu quero comer o %s.", $request);
        }

        return parent::handle($request);
    }
}
