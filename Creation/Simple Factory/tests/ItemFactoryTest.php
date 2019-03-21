<?php

declare(strict_types=1);

namespace Tests;

use App\Item;
use App\ItemFactory;
use PHPUnit\Framework\TestCase;

class ItemFactoryTest extends TestCase
{
    /**
     * Teste invoke
     */
    public function testRetornaUmaInstanciaDeItem()
    {
        $item = new ItemFactory();

        $this->assertInternalType("object", $item());
        $this->assertInstanceOf(Item::class, $item());
    }
}
