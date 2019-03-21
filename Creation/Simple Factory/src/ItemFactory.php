<?php

declare(strict_types=1);

namespace App;

class ItemFactory
{
    /**
     * Cria um novo Item
     *
     * @return Item
     */
    public function __invoke(): Item
    {
        return new Item();
    }
}
