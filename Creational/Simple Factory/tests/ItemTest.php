<?php

declare(strict_types=1);

namespace Tests;

use App\Item;
use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{
    /** @var Item */
    private $item;

    /**
     * Config inicial
     */
    protected function setUp()
    {
        $this->item = new Item();
    }

    /**
     * Teste setNome, setQuantidade, setValor e toString
     */
    public function testRetornaUmaStringComOsAtributosDeItem()
    {
        $this->item->setNome('Plano de Internet');
        $this->item->setQuantidade(1);
        $this->item->setValor(120.50);

        $this->assertInternalType("string", $this->item->__toString());
        $this->assertContains('Plano de Internet', $this->item->__toString());
        $this->assertContains('1', $this->item->__toString());
        $this->assertContains('120.5', $this->item->__toString());
    }
}
