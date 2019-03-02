<?php

declare(strict_types=1);

namespace App;

class MacacoHandler extends AbstractHandler
{
    public function handle(string $request): string
    {
        if ($request === "Banana") {
            return sprintf("Macaco: Eu quero comer a %s.", $request);
        }

        return parent::handle($request);
    }
}
