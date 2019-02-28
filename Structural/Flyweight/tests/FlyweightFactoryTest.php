<?php

declare(strict_types=1);

namespace Tests;

use App\FlyweightFactory;
use PHPUnit\Framework\TestCase;

class FlyweightFactoryTest extends TestCase
{
    /**
     * Teste get
     */
    public function testBuscaOMesmoObjetoCaracterNaPool()
    {
        $factory = new FlyweightFactory();

        $aVerdana = $factory->get("a");
        $aArial   = $factory->get("a");

        $this->assertInternalType("string", $aVerdana->renderiza("Verdana"));
        $this->assertInternalType("string", $aArial->renderiza("Arial"));

        $this->assertInternalType("integer", $factory->count());
        $this->assertEquals(1, $factory->count());

        $bTimes = $factory->get("b");

        $this->assertInternalType("string", $bTimes->renderiza("Times"));
        $this->assertEquals(2, $factory->count());
    }
}